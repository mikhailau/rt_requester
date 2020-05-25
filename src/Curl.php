<?php

namespace Mikhailau\Rt\Requester;


use \PetrKnap\Php\Singleton\SingletonTrait;
use \PetrKnap\Php\Singleton\SingletonInterface;


class Curl extends \Curl\Curl implements SingletonInterface
{
    use SingletonTrait;

    private function __constructor()
    {
        parent::__construct();
    }

}