<?php

namespace Mikhailau\Rt\Requester\Test;

use PHPUnit\Framework\TestCase;
use Mikhailau\Rt\Requester\Rt\Ticket\TicketShow;

class TicketShowTest extends TestCase
{
    const TICKET_URL='/REST/1.0/ticket/';

    /**
     * @dataProvider providerGetUrl
     */
    public function testGetUrl($ticketId,$data,$result)
    {
        $this->assertEquals($result,$this->getUrl($ticketId,$data));

    }
    public function providerGetUrl()
    {
        $data=$this->dataShowTicket();
        $dataSetter=function ($item){
            return self::TICKET_URL.$item[0]."/";
        };
        return $this->setResultToProviderData($data,$dataSetter);
    }
    public function setResultToProviderData(array $data,callable $resultCreator)
    {
        $result=array();
        foreach ($data as $item){
            $item[]=$resultCreator($item);
            $result[]=$item;
        }
        return $result;
    }

    public function dataShowTicket()
    {
        return array(
            array(111,[]),
            array(11232131,["user"=>123,"pass"=>14444]),
            array( "1312",["user"=>123,"pass"=>14444])
        );
    }
    private function getUrl($ticketId, $data)
    {
        $ticket=new TicketShow($ticketId,$data);
        return $ticket->getUrl();
    }

}
