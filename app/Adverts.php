<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

/**
 * Class Adverts
 * @package App
 *
 * @property int $id
 * @property int $advert_types_id
 * @property string $title
 * @property string $file_name
 * @property string $file_mime
 * @property string $file_hash
 * @property string $file_ext
 * @property string $file_size
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 *
 *  @property AdvertTypes $type
 */

class Adverts extends Model
{
    use SoftDeletes;
    public $image;
    public $file;

    protected $fillable = ['id', 'advert_types_id', 'title','file_name', 'file_mime','file_ext','file_hash','file_size','file_height','file_width','link'];

    static $rules = [
        'advert_types_id' => 'required|integer',
        'title' => 'required|string',
        'file_name' => 'required|string',
        'file_hash' => 'required|string',
        'file_mime' => 'required|string',
        'file_size' => 'required|integer|max:2097152',
        'file_ext' => 'required|string',
        'link' => 'string',
    ];
//mimes:jpeg,jpg,png
    //        if ($file_size > 2 * 1024 * 1024) {
//            throw new Exception(__('save_error'));
//        }
//        if (!in_array($file_ext,['jpg', 'png', 'jpeg'])) {
//            throw new Exception(__('save_error'));
//        }



    public function type()
    {
        return $this->belongsTo(AdvertTypes::class,'advert_types_id','id');
    }

    public function typeName(){
        return AdvertTypes::getTypeList()[$this->advert_types_id];
    }


    public function getActionsAttribute()
    {
        return '';
    }

    public static function getAllAdvertsCount(){
        return Adverts::count();
    }

    public static function getMainBlockdvertsCount(){
        return Adverts::where('advert_types_id',AdvertTypes::MAIN_BLOCK_ADVERT)->count();
    }
    public function getList(){
        return [];
    }

}
