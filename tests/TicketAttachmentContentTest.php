<?php

namespace Mikhailau\Rt\Requester\Test;

use Mikhailau\Rt\Requester\Rt\Ticket\TicketAttachmentContent;
use PHPUnit\Framework\TestCase;

class TicketAttachmentContentTest extends TestCase
{
    use TestsTrait;

    const TICKET_URL = TicketAttachmentContent::URL;
    const TICKET_URL_SECOND = TicketAttachmentContent::URL_SECOND_PART;

    /**
     * @dataProvider providerGetUrl
     */
    public function testGetUrl($ticketId, $historyId, $data, $result)
    {
        $ticket = $this->getData(new TicketAttachmentContent($ticketId, $historyId, $data));
        $this->assertEquals($result, $ticket["URL"]);

    }

    public function providerGetUrl()
    {
        $data = $this->dataShowTicket();
        $dataSetter = function ($item) {
            return self::TICKET_URL . $item[0] . "/" . self::TICKET_URL_SECOND . $item[1]."/content/";
        };
        return $this->setResultToProviderData($data, $dataSetter);
    }

    public function dataShowTicket()
    {
        return array(
            array(111, "", []),
            array(11232131, 0, ["user" => 123, "pass" => 14444]),
            array("1312", 12, ["user" => 123, "pass" => 14444])
        );
    }


}
