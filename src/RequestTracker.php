<?php

namespace Mikhailau\Rt\Requester;

use Mikhailau\Rt\Requester;

class RequestTracker implements Requester\Interfaces\RequestTrackerInterface
{
    protected $curl;
    protected $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->curl = new Curl();
        $this->baseUrl = $baseUrl;
    }

    public function getTicket(string $tickerId, array $data = [])
    {
        return $this->doQuery(new Requester\Rt\Ticket\TicketShow($tickerId, $data));

    }

    protected function doQuery(Requester\Interfaces\QueryMakerInterface $queryMaker)
    {
        $this->curl->setOptions($queryMaker->getOptions());
        $url = $queryMaker->getUrl();
        $url = $this->baseUrl . $url;
        $data = $queryMaker->getData();
        return $this->curl->{$queryMaker->type::TYPE}(
            $url,
            $data
        );

    }


}