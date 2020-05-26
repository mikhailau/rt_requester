<?php


namespace Mikhailau\Rt\Requester;


use Mikhailau\Rt\Requester\Interfaces\QueryTypeInterface;

abstract class  QueryMaker extends AbstractQueryMaker
{
    /**
     * The Query to run against the FileSystem
     * @var QueryTypeInterface;
     */
    protected $type;
    protected $baseUrl = "https://rt.cert.by";
    protected $data;
    protected $url;

    public function execute()
    {
        $curl=new Curl();
        $curl->setOptions($this->options);
        return $curl->{$this->type::TYPE}($this->url,$this->data);


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
        $this->url= $this->baseUrl . "/" . $baseUrl;
    }

    protected function setData(array $data)
    {
        $this->data = $data;
    }


}