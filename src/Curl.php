<?php

namespace RT;

class Curl extends \Curl\Curl implements \PetrKnap\Php\Singleton\SingletonInterface
{
    use \PetrKnap\Php\Singleton\SingletonTrait;
    public $i=0;
    private function __constructor()
    {
        echo "HERE";
        parent::__construct();
    }

}