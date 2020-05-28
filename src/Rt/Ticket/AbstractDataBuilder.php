<?php


namespace Mikhailau\Rt\Requester\Rt\Ticket;


use Mikhailau\Rt\Requester\Ticket\Interfaces\DataBuilderInterface;
use Mikhailau\Rt\Requester\Ticket\Interfaces\TicketConstantsInterface;

abstract class AbstractDataBuilder implements DataBuilderInterface, TicketConstantsInterface
{
    protected $result=array();

    /**
     * @return array
     */
    public function getResultAsArray(): array
    {
        return $this->result;
    }

    protected function addFieldToResult($key,$data)
    {
        $result[$key]=$data;
        return $this;
    }
}