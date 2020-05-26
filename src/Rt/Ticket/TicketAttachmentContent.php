<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;

use Mikhailau\Rt\Requester\Queries\Get;
use Mikhailau\Rt\Requester\QueryMaker;

class TicketAttachmentContent extends QueryMaker
{
    const URL="/REST/1.0/ticket/";
    const URL_SECOND_PART="attachments/";

    public function __construct(String $ticketId,String $attachmentId,Array $data)
    {
        $url=$this->createBaseUrl($ticketId,$attachmentId);
        $this->command(new Get(),$url,$data);
    }

    protected function createBaseUrl($ticketId, $attachmentId)
    {
        return self::URL.$ticketId."/".self::URL_SECOND_PART."/".$attachmentId."/content";
    }

}