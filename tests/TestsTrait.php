<?php


namespace Mikhailau\Rt\Requester\Test;


use Mikhailau\Rt\Requester\Interfaces\QueryMakerInterface;

trait TestsTrait
{
    public function setResultToProviderData(array $data, callable $resultCreator)
    {
        $result = array();
        foreach ($data as $item) {
            $item[] = $resultCreator($item);
            $result[] = $item;
        }
        return $result;
    }

    private function getData(QueryMakerInterface $ticket)
    {
        return array(
            "URL" => $ticket->getUrl(),
            "DATA" => $ticket->getData(),
            "OPTIONS" => $ticket->getOptions()
        );
    }

    private function getOptionKeys()
    {
        return array(
            CURLOPT_RETURNTRANSFER,
            CURLOPT_MAXREDIRS,
            CURLOPT_TIMEOUT,
            CURLOPT_HTTP_VERSION,
            CURLOPT_HTTPHEADER
        );
    }

}