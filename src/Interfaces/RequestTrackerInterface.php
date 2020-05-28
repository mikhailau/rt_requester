<?php


namespace Mikhailau\Rt\Requester\Interfaces;


/**
 * Interface RequestTrackerInterface
 * @package Mikhailau\Rt\Requester\Interfaces
 */
interface RequestTrackerInterface
{
    /**
     * @param string $tickerId
     * @param array $data
     * @return mixed
     */
    public function getTicket(string $tickerId, array $data=[]);

}