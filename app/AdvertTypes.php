<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdvertTypes
 * @package App
 *
 * @property int $id
 * @property string $name
 *
 */


class AdvertTypes extends Model
{
    const HEADER_ADVERT=1;
    const MAIN_BLOCK_ADVERT=2;
    const FOOTER_ADVERT=3;

    public static function getTypeList(){
        return [
          self::HEADER_ADVERT=>'Реклама для шапки',
          self::MAIN_BLOCK_ADVERT=>'Реклама для главного блока',
          self::FOOTER_ADVERT=>'Реклама для подвала',
        ];
    }

}
