<?php


namespace Mikhailau\Rt\Requester\Interfaces;


interface RequestTrackerInterface
{
    public function getTicket(string $tickerId, array $data=[]);

}