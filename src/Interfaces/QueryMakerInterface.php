<?php

namespace Mikhailau\Rt\Requester\Interfaces;

interface QueryMakerInterface
{
    public function execute();
    public function getUrl();
    public function getOptions();
    public function getData();
//    public function setBaseUrl($url);

}