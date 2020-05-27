<?php


namespace Mikhailau\Rt\Requester;


use Mikhailau\Rt\Requester\Interfaces\QueryTypeInterface;

abstract class  QueryMaker extends AbstractQueryMaker
{
    /**
     * The Query to run against the FileSystem
     * @var QueryTypeInterface;
     */
    public $type;
    protected $data;
    protected $url;
    protected $baseUrl = "";

    public function execute()
    {



    }
    public function getData():array
    {
        return $this->data;
    }
    public function getUrl():string
    {
        return $this->url;
    }
    public function getOptions():array
    {
        return $this->options;
    }


    protected function command(QueryTypeInterface $queryType, $baseUrl, $data)
    {
        $this->setDefaultOptions(false);
        $this->setQueryType($queryType);
        $this->setData($data);
        $this->setUrl($baseUrl);

    }

    protected function setQueryType(QueryTypeInterface $queryType)
    {
        $this->type = $queryType;
    }

    protected function setUrl(string $baseUrl)
    {
        $this->url=  $baseUrl;
    }

    protected function setData(array $data)
    {
        $this->data = $data;
    }






}