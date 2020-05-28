<?php

namespace Mikhailau\Rt\Requester\Ticket\Interfaces;

/**
 * Interface TicketSearchDataBuilder
 * @package Mikhailau\Rt\Requester\Ticket\Interfaces
 */
interface TicketSearchDataBuilder
{




    /**
     * @param $string
     * @return TicketSearchDataBuilder
     */
    public function addQueue(string $string): TicketSearchDataBuilder;

    /**
     * @return TicketSearchDataBuilder
     */
    public function addOrder(string $field, string $order = "asc"): TicketSearchDataBuilder;
    public function addFormat();

}