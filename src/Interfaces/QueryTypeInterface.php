<?php


namespace Mikhailau\Rt\Requester\Interfaces;


interface QueryTypeInterface
{
    public static function getType();
    public static function buildUrl(String $baseUrl): string;
    public static function buildData(Array $data);
}