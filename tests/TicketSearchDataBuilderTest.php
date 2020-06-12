<?php

namespace Mikhailau\Rt\Requester\Test;

use Mikhailau\Rt\Requester\Rt\Ticket\TicketSearchDataBuilder;
use PHPUnit\Framework\TestCase;

class TicketSearchDataBuilderTest extends TestCase
{
    /**
     * @dataProvider dataAddOrder
     * @param $field
     * @param $sortOrder
     * @param $result
     */
    public function testAddOrder($field,$sortOrder,$result)
    {
    //    $ts=new TicketSearchDataBuilder();

    }

    public function testAddFormat()
    {

    }

    public function testGetResultAsArray()
    {
        $ts=new TicketSearchDataBuilder();
        $this->assertTrue(true, is_array($ts->getResultAsArray()));
        $this->assertTrue(true, is_array($ts->addOrder(TicketSearchDataBuilder::FIELD_CC)->addQuery("1=1")->addQueue("Main")->getResultAsArray()));
    }

    public function testAddQueue()
    {

    }

    public function testAddQuery()
    {

    }
    public function dataAddOrder()
    {
        return array(
            array(
                "some",TicketSearchDataBuilder::ORDER_ASC,"error"
            )
        );
    }
}
