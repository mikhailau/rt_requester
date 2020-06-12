<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;

use \Mikhailau\Rt\Requester\Rt\Ticket\Interfaces\DataBuilderInterface;
use Mikhailau\Rt\Requester\Rt\Ticket\Interfaces\TicketConstantsInterface;

abstract class AbstractDataBuilder implements DataBuilderInterface, TicketConstantsInterface
{
    protected $result = array();

    /**
     * @return array
     */
    public function getResultAsArray(): array
    {
        return $this->result;
    }

    protected function addFieldToResult($key, $data)
    {

        $this->result[$key] = $data;
        return $this;
    }
}