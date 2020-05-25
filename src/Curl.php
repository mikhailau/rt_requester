<?php

namespace Mikhailau\Rt\Requester;

class Curl extends \Curl\Curl implements \PetrKnap\Php\Singleton\SingletonInterface
{
    use \PetrKnap\Php\Singleton\SingletonTrait;
    private function __constructor()
    {
        parent::__construct();
    }

}