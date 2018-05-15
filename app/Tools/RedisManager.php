<?php
/**
 * Created by PhpStorm.
 * User: haili
 * Date: 2018/5/15
 * Time: 17:44
 */
namespace App\Tools;

use Illuminate\Support\Facades\Redis;

class RedisManager{
    private static $year = 86400*7; //七天
    private static $day = 86400;
    public static function cache($func, $params = [], $seconds = 3600){
        $key = self::cache_params($func, $params);
        $value = self::CacheInstanceGet($key);
    }
    public static function cache_params($func, $params){
        $key = '';
        if (is_string($func)){
            $key .= $func;
        }else if(is_array($func)){
            foreach ($func as $info){
                if (is_object($info)) $key .= get_class($info);
                if(is_string($info))  $key .= '_'.$func;
            }
        }
        $key = $key . '_'.implode('_', array_values($params));
        $key = last(explode('\\', $key));
        return $key;
    }
    public static function CacheInstanceGet($key, $def=null){
        if (!Redis::exists($key)) return $def;
        return Redis::get($key);
    }
}