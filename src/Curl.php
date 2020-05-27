<?php

namespace Mikhailau\Rt\Requester;


use Mikhailau\Rt\Requester\Interfaces\CurlInterface;
use \PetrKnap\Php\Singleton\SingletonTrait;
use \PetrKnap\Php\Singleton\SingletonInterface;

class Curl extends \Curl\Curl implements SingletonInterface, CurlInterface
{

    use SingletonTrait;

    private function __constructor()
    {
        parent::__construct();
    }

    public function setOptions(array $options)
    {
        foreach ($options as $key => $value) {
            $this->setOpt($key, $value);
        }
    }


}