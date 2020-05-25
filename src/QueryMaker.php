<?php


namespace RT;


use RT\Interfaces\IOptionMaker;
use RT\Interfaces\IQueryMaker;

class QueryMaker implements IQueryMaker
{
    private static  $instance;
    private function __construct()
    {
    }
    protected function __clone() { }
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {

        if(empty($instance))
        {
            self::$instance=new static;
        }
        return self::$instance;
    }
    private function  createCurl(){

    }

    public function getData(): string
    {
        echo 123;
        return "123";
        // TODO: Implement getData() method.
    }
    public function setOptions(IOptionMaker $optionMaker)
    {

        // TODO: Implement setOptions() method.
    }

}