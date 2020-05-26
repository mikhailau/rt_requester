<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;

use Mikhailau\Rt\Requester\Queries\Get;
use Mikhailau\Rt\Requester\QueryMaker;

class TicketShow extends QueryMaker
{
    const URL="/REST/1.0/ticket/";

    public function __construct(String $ticketId,Array $data)
    {
        $url=$this->createBaseUrl($ticketId);
        $this->command(new Get(),$url,$data);
    }

    protected function createBaseUrl($ticketId)
    {
        return self::URL.$ticketId."/";
    }

}