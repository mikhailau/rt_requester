<?php

namespace Mikhailau\Rt\Requester\Rt\Ticket\Interfaces;

interface TicketConstantsInterface
{
    /**
     * queue name
     */
    const FIELD_QUEUE = "Queue";
    /**
     * requestor email address
     */
    const FIELD_ID = 0;
    const FIELD_REQUESTOR = 1;
    const FIELD_SUBJECT = 2;
    const FIELD_CC = 3;
    const FIELD_ADMIN_CC = 4;
    const FIELD_OWNER = 5;
    const FIELD_STATUS = 6;
    const FIELD_PRIORITY = 7;
    const FIELD_INITIAL_PRIORITY = 8;
    const FIELD_FINAL_PRIORITY = 9;
    const FIELD_TIME_ESTIMATED = 10;
    const FIELD_DUE = 11;
    const FIELD_STARTS = 12;
    const FIELD_TEXT = 13;
    const FIELDS = array(
        0 => "Id",
        1 => "Requestor",
        2 => "Subject",
        3 => "Cc",
        4 => "AdminCc",
        5 => "Owner",
        6 => "Status",
        7 => "Priority",
        8 => "InitialPriority",
        9 => "FinalPriority",
        10 => "TimeEstimated",
        11 => "Due",
        12 => "Starts",
        13 => "Text",
    );


    const GET_ORDER_BY = "orderby";
    const GET_QUEUE = "queue";
    const GET_QUERY = "query";
    const GET_FORMAT = "format";
    const GET_FIELDS = "fields";

    const SEARCH_FORMAT = array(
        0 => "l",
        1 => "s",
        2 => "i"
    );
    const SEARCH_FORMAT_LONG = "0";
    const SEARCH_FORMAT_ID = "2";
    const SEARCH_FORMAT_SHORT = "1";

    const ORDER_ASC = "asc";
    const ORDER_DESC = "desc";

}