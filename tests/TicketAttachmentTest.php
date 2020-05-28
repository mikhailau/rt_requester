<?php

namespace Mikhailau\Rt\Requester\Test;

use Mikhailau\Rt\Requester\Rt\Ticket\TicketAttachment;
use PHPUnit\Framework\TestCase;

/**
 * Class TicketAttachmentTest
 * @package Mikhailau\Rt\Requester\Test
 */
class TicketAttachmentTest extends TestCase
{
    use TestsTrait;

    /**
     *
     */
    const TICKET_URL = TicketAttachment::URL;
    /**
     *
     */
    const TICKET_URL_SECOND = TicketAttachment::URL_SECOND_PART;

    /**
     * @dataProvider providerGetUrl
     */
    public function testGetUrl($ticketId, $historyId, $data, $result)
    {
        $ticket = $this->getData(new TicketAttachment($ticketId, $historyId, $data));
        $this->assertEquals($result, $ticket["URL"]);

    }

    /**
     * @return array
     */
    public function providerGetUrl()
    {
        $data = $this->dataShowTicket();
        $dataSetter = function ($item) {
            return self::TICKET_URL . $item[0] . "/" . self::TICKET_URL_SECOND . $item[1];
        };
        return $this->setResultToProviderData($data, $dataSetter);
    }

    /**
     * @return array[]
     */
    public function dataShowTicket()
    {
        return array(
            array(111, "", []),
            array(11232131, 0, ["user" => 123, "pass" => 14444]),
            array("1312", 12, ["user" => 123, "pass" => 14444])
        );
    }


}
