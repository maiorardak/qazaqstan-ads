<?php

namespace App\Http\Controllers;

use App\Adverts;
use App\AdvertTypes;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()){
            return redirect('admin.index');
        }
        $adverts=Adverts::where(['advert_types_id'=>AdvertTypes::MAIN_BLOCK_ADVERT])->whereNull('deleted_at')->get();
        $header_advert=Adverts::where(['advert_types_id'=>AdvertTypes::HEADER_ADVERT])->whereNull('deleted_at')->first();
        $footer_advert=Adverts::where(['advert_types_id'=>AdvertTypes::FOOTER_ADVERT])->whereNull('deleted_at')->first();
        return view('home',compact('adverts','header_advert','footer_advert'));
    }

    public function about(){
        $header_advert=Adverts::where(['advert_types_id'=>AdvertTypes::HEADER_ADVERT])->whereNull('deleted_at')->first();
        $footer_advert=Adverts::where(['advert_types_id'=>AdvertTypes::FOOTER_ADVERT])->whereNull('deleted_at')->first();
        return view('about',compact('header_advert','footer_advert'));
    }
    public function contactForm(){
        $header_advert=Adverts::where(['advert_types_id'=>AdvertTypes::HEADER_ADVERT])->whereNull('deleted_at')->first();
        $footer_advert=Adverts::where(['advert_types_id'=>AdvertTypes::FOOTER_ADVERT])->whereNull('deleted_at')->first();
        return view('contact_form',compact('header_advert','footer_advert'));
    }
}
