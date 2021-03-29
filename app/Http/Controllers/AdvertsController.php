<?php

namespace App\Http\Controllers;

use App\Adverts;
use App\AdvertTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdvertsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('adverts.index');
    }

    public function create()
    {
        $type=request()->get('type');

        return view('adverts.create',compact('type'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $file=$request->file('file');
        $file_original_name=$file->getClientOriginalName();
        $name_exp = explode('.',$file_original_name);
        $file_ext = array_pop($name_exp);
        $file_size =$file->getSize();
        $fileName = rand(111111, 9999999) . '.' . $file_ext;
        $path =public_path(). '/upload/'. Session::getId() . '/';

        $request_arr=[
            'advert_types_id' => $request->get('advert_types_id'),
            'title' =>  $request->get('title'),
            'link' =>  $request->get('link'),
            'file_hash' => Session::getId()  . '/' . $fileName,//path
            'file_name' =>  $file_original_name,
            'file_ext' =>$file_ext,
            'file_mime' =>  $file->getMimeType(),
            'file_size' =>  $file_size,
        ];


        $validator = Validator::make($request_arr,Adverts::$rules);
        if (!$validator->fails()) {
            $advert = Adverts::create($request_arr);

            if($advert){
                if(!file_exists($path)){
                    File::makeDirectory($path, 755, true);
                }
                if(!file_exists($path . $fileName)){
                    move_uploaded_file($file->getPathname(), $path . $fileName);
                }
                DB::commit();
                session()->flash('success', __('questions.success_message'));
                return redirect()->route('adverts.index');

            }


          }else{

            DB::rollBack();
           return redirect()->back()
                ->withInput()
                ->withErrors($validator);

        }

    }
      public function storeCroppedImage(Request $request){

        $id=$request->get('advert_id');
            $advert=Adverts::where('id',$id)->first();

          $file=$request->file('croppedImage');

          $file_size =$file->getSize();

          $old_file_path=public_path(). '/upload/'.$advert->file_hash;

          $move=move_uploaded_file($file->getPathname(), $old_file_path);

          if($move){
              $request_arr=[
                  'file_size' =>  $file_size,
              ];
              $advert->update($request_arr);
//              return redirect()->route('adverts.image_crop',$advert->id)
//                  ->with('success', 'Изменения успешно сохранились');
              return response()->json([
                  'message' => __('Изменения успешно сохранились')
              ],200);

          }

          return response()->json([
              'message' => __('При сохранение произашло ошибка')
          ], 406);
      }
     public function destroy($id){
         $adverts=Adverts::where('id',$id)->first();
        $adverts->deleted_at=date('Y-m-d H:i:s');
         $adverts->save();
         return redirect()->route('adverts.index');
     }

    public function imageCrop($id){
        $advert=Adverts::where('id',$id)->first();

        return view('adverts.image_cropper',compact('advert'));
    }

   public function show(Adverts $advert){

   }
    /**
     * Adverts List for Datatable.js
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function ajax(Request $request)
    {

        $adverts = Adverts::orderBy('id', 'DESC');
        $adverts=$adverts->whereNull('deleted_at');
        $adverts=$adverts->with(['type']);
        $adverts = $adverts->paginate($request->get('length'), ['adverts.*'], 'page', $request->get('draw'));

dd($adverts->items());
        return response()->json([
            'page' =>  $adverts->currentPage(),
            'pages' => $adverts->lastPage(),
            'length' => (int)$adverts->perPage(),
            'start' => (int)$adverts->perPage(),
            'recordsTotal' => $adverts->total(),
            'recordsFiltered' => $adverts->total(),
            'data' => $adverts->items()
        ]);


    }


}
