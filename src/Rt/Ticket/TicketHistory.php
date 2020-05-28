<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;

use Mikhailau\Rt\Requester\Queries\Get;
use Mikhailau\Rt\Requester\QueryMaker;

class TicketHistory extends QueryMaker
{
    const URL = "/REST/1.0/ticket/";
    const URL_SECOND_PART = "history/";

    public function __construct(string $ticketId, array $data)
    {
        $url = $this->createBaseUrl($ticketId);
        $this->command(new Get(), $url, $data);
    }

    protected function createBaseUrl($ticketId, $longFormat = false)
    {
        $long = "";
        if ($longFormat) {
            $long = "?format=l";
        }
        return self::URL . $ticketId . "/" . self::URL_SECOND_PART . $long;
    }

}