<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;


class TicketAttachmentContent extends TicketAttachment
{
    const URL = "/REST/1.0/ticket/";
    const URL_SECOND_PART = "attachments/";


    protected function createBaseUrl($ticketId, $attachmentId)
    {
        return self::URL . $ticketId . "/" . self::URL_SECOND_PART . $attachmentId . "/content/";
    }

}