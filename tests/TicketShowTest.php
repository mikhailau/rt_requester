<?php

namespace Mikhailau\Rt\Requester\Test;

use PHPUnit\Framework\TestCase;
use Mikhailau\Rt\Requester\Rt\Ticket\TicketShow;

class TicketShowTest extends TestCase
{
    use TestsTrait;

    const TICKET_URL = '/REST/1.0/ticket/';

    /**
     * @dataProvider providerGetUrl
     */
    public function testGetUrl($ticketId, $data, $result)
    {
        $ticket = $this->getData(new TicketShow($ticketId, $data));
        $this->assertEquals($result, $ticket["URL"]);

    }

    /**
     * @dataProvider providerGetData
     */
    public function testGetData($ticketId, $data, $result)
    {
        $ticket = $this->getData(new TicketShow($ticketId, $data));
        $this->assertEquals(0, count(array_diff($result, $ticket["DATA"])));

    }

    /**
     * @dataProvider dataShowTicket
     */

    public function testGetOptions($ticketId, $data)
    {
        $ticket = $this->getData(new TicketShow($ticketId, $data));
        $options = $ticket["OPTIONS"];
        $keys = $this->getOptionKeys();
        foreach ($keys as $item) {
            $this->assertArrayHasKey($item, $options);
        }

    }

    public function providerGetUrl()
    {
        $data = $this->dataShowTicket();
        $dataSetter = function ($item) {
            return self::TICKET_URL . $item[0] . "/";
        };
        return $this->setResultToProviderData($data, $dataSetter);
    }

    public function providerGetData()
    {
        $data = $this->dataShowTicket();
        $dataSetter = function ($item) {
            return $item[1];
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
