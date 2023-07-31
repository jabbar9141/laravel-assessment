<?php

use App\Models\SpecialPrice;

if (!function_exists('getSpecialPrice'))
{
    function getSpecialPrice($product,$client){
        $result = SpecialPrice::select('special_price')->where('product_id',$product->id)->where('user_id',$client->id)->first();
        if (isset($result)) {
           return $result->special_price;
        }else {
            return "Not Set";
        }
    }

}
