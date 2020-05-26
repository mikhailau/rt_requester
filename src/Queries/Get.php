<?php

namespace Mikhailau\Rt\Requester\Queries;


use \Mikhailau\Rt\Requester\Interfaces\QueryTypeInterface;

class Get implements QueryTypeInterface
{
    const TYPE="get";

    protected static $data;
    public static function getType()
    {
        return self::getType();
    }
    public function getTypeConst(){
        return self::getType();
    }
    public static function buildData(Array $data)
    {
        return $data;
    }
    public static function buildUrl(String $baseUrl): string
    {
        return $baseUrl;
    }

}