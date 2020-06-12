<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;

use Mikhailau\Rt\Requester\Queries\Get;
use Mikhailau\Rt\Requester\QueryMaker;

class TicketSearch extends QueryMaker
{
    const URL = "/REST/1.0/search/ticket";

    public function __construct(array $data)
    {
        $url = $this->createBaseUrl();
        $this->command(new Get(), $url, $data);
    }

    protected function createBaseUrl()
    {
        return self::URL;
    }

}