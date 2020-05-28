<?php


namespace Mikhailau\Rt\Requester;


use Mikhailau\Rt\Requester\Interfaces\QueryTypeInterface;
use Mikhailau\Rt\Requester\Interfaces\QueryMakerInterface;

/**
 * Class AbstractQueryMaker
 * @package Mikhailau\Rt\Requester
 */
abstract class AbstractQueryMaker implements QueryMakerInterface
{
    /**
     * Options
     * @var array
     */
    protected $options=array();


    /**
     *
     * @return mixed
     */
    abstract protected function setQueryType(QueryTypeInterface $queryType);

    abstract protected function setData(Array $data);

    abstract protected function setUrl(String $baseUrl);

    abstract protected function command(QueryTypeInterface $queryType,$baseUrl,$data);



    /**
     * @param bool $sslVerify
     */
    protected function setDefaultOptions(Bool $sslVerify=true)
    {
        $this->options[CURLOPT_RETURNTRANSFER] = true;
        $this->options[CURLOPT_MAXREDIRS] = 10;
        $this->options[CURLOPT_TIMEOUT] = 30;
        $this->options[CURLOPT_HTTP_VERSION] = "CURL_HTTP_VERSION_1_1";
        $this->options[CURLOPT_HTTPHEADER] = array("content-type: application/x-www-form-urlencoded");
        if(!$sslVerify) {
            $this->options[CURLOPT_SSL_VERIFYPEER] = false;
            $this->options[CURLOPT_SSL_VERIFYHOST] = false;
        }
    }

}