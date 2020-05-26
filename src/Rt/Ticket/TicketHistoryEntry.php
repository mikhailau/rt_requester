<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;

use Mikhailau\Rt\Requester\Queries\Get;
use Mikhailau\Rt\Requester\QueryMaker;

class TicketHistoryEntry extends QueryMaker
{
    const URL="/REST/1.0/ticket/";
    const URL_SECOND_PART="history/";

    public function __construct(String $ticketId,String $historyId,Array $data)
    {
        $url=$this->createBaseUrl($ticketId,$historyId);
        $this->command(new Get(),$url,$data);
    }

    protected function createBaseUrl($ticketId, $historyId)
    {
        return self::URL.$ticketId."/".self::URL_SECOND_PART."/".$historyId;
    }

}