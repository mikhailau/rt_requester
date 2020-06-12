<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket;

use Mikhailau\Rt\Requester\Rt\Ticket\Interfaces\TicketSearchDataBuilderInterface;

class TicketSearchDataBuilder extends AbstractDataBuilder implements TicketSearchDataBuilderInterface
{

    /**
     * @inheritDoc
     */
    public function addQueue(string $string): TicketSearchDataBuilderInterface
    {
        return $this->addFieldToResult(self::GET_QUEUE,$string);
    }

    /**
     * @inheritDoc
     */
    public function addOrder(string $field, string $order = "asc"): TicketSearchDataBuilderInterface
    {
        if($order=="asc")
            $field="+".$field;
        else
            $field="-".$field;
        return $this->addFieldToResult(self::GET_ORDER_BY,$field);
    }

    /**
     * @inheritDoc
     */
    public function addFormat(int $format): TicketSearchDataBuilderInterface
    {
        return $this->addFieldToResult(self::GET_FORMAT,self::SEARCH_FORMAT[$format]);
    }

    /**
     * @inheritDoc
     */
    public function addQuery(string $query): TicketSearchDataBuilderInterface
    {
        return $this->addFieldToResult(self::GET_QUERY,$query);
    }


    /**
     * @param array $fields
     * @return TicketSearchDataBuilderInterface
     */
    public function addFields(array $fields): TicketSearchDataBuilderInterface
    {

        return $this->addFieldToResult(self::GET_FIELDS,implode(",",$fields));
    }
}