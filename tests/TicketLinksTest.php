<?php

namespace Mikhailau\Rt\Requester\Test;

use Mikhailau\Rt\Requester\Rt\Ticket\TicketLinks;
use PHPUnit\Framework\TestCase;

class TicketLinksTest extends TestCase
{
    use TestsTrait;

    const TICKET_URL = TicketLinks::URL;
    const TICKET_URL_SECOND = TicketLinks::URL_SECOND_PART;

    /**
     * @dataProvider providerGetUrl
     */
    public function testGetUrl($ticketId, $data, $result)
    {
        $ticket = $this->getData(new TicketLinks($ticketId, $data));
        $this->assertEquals($result, $ticket["URL"]);

    }

    public function providerGetUrl()
    {
        $data = $this->dataShowTicket();
        $dataSetter = function ($item) {
            return self::TICKET_URL . $item[0] . "/" . self::TICKET_URL_SECOND;
        };
        return $this->setResultToProviderData($data, $dataSetter);
    }

    public function dataShowTicket()
    {
        return array(
            array(111, []),
            array(11232131, ["user" => 123, "pass" => 14444]),
            array("1312", ["user" => 123, "pass" => 14444])
        );
    }


}
