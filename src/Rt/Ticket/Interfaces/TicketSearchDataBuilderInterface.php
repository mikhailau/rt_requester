<?php

namespace Mikhailau\Rt\Requester\Ticket\Interfaces;

/**
 * Interface TicketSearchDataBuilderInterface
 * @package Mikhailau\Rt\Requester\Ticket\Interfaces
 */
interface TicketSearchDataBuilderInterface
{




    /**
     * @param $string
     * @return TicketSearchDataBuilderInterface
     */
    public function addQueue(string $string): TicketSearchDataBuilderInterface;


    /**
     * @param string $field
     * @param string $order
     * @return TicketSearchDataBuilderInterface
     */
    public function addOrder(string $field, string $order = "asc"): TicketSearchDataBuilderInterface;

    /**
     * @param int $format
     * @return TicketSearchDataBuilderInterface
     */
    public function addFormat(int $format): TicketSearchDataBuilderInterface;

    /**
     * @param string $query
     * @return TicketSearchDataBuilderInterface
     */
    public function addQuery(string $query): TicketSearchDataBuilderInterface;

}