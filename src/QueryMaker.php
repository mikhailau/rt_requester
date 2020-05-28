<?php


namespace Mikhailau\Rt\Requester;


use Mikhailau\Rt\Requester\Interfaces\QueryTypeInterface;

/**
 * Class QueryMaker
 * @package Mikhailau\Rt\Requester
 */
abstract class  QueryMaker extends AbstractQueryMaker
{
    /**
     * The Query to run against the FileSystem
     * @var QueryTypeInterface;
     */
    public $type;
    /**
     * @var
     */
    protected $data;
    /**
     * @var
     */
    protected $url;
    /**
     * @var string
     */
    protected $baseUrl = "";

    /**
     *
     */
    public function execute()
    {


    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }


    /**
     * @param QueryTypeInterface $queryType
     * @param $baseUrl
     * @param $data
     */
    protected function command(QueryTypeInterface $queryType, $baseUrl, $data)
    {
        $this->setDefaultOptions(false);
        $this->setQueryType($queryType);
        $this->setData($data);
        $this->setUrl($baseUrl);

    }

    /**
     * @param QueryTypeInterface $queryType
     * @return mixed|void
     */
    protected function setQueryType(QueryTypeInterface $queryType)
    {
        $this->type = $queryType;
    }

    /**
     * @param string $baseUrl
     */
    protected function setUrl(string $baseUrl)
    {
        $this->url = $baseUrl;
    }

    /**
     * @param array $data
     */
    protected function setData(array $data)
    {
        $this->data = $data;
    }


}