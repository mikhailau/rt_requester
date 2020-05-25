<?php
namespace RT\Interfaces;

interface IQueryMaker
{
    public function getData() : string;
    public function setOptions(IOptionMaker $optionMaker);
}