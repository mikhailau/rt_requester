<?php


namespace Mikhailau\Rt\Requester\Ticket\Interfaces;


interface TicketConstantsInterface
{
    /**
     * queue name
     */
    const FIELD_QUEUE = "Queue";
    /**
     * requestor email address
     */
    const FIELD_ID = "Id";
    const FIELD_REQUESTOR = "Requestor";
    const FIELD_SUBJECT = "Subject";
    const FIELD_CC = "Cc";
    const FIELD_ADMIN_CC = "AdminCc";
    const FIELD_OWNER = "Owner";
    const FIELD_STATUS = "Status";
    const FIELD_PRIORITY = "Priority";
    const FIELD_INITIAL_PRIORITY = "InitialPriority";
    const FIELD_FINAL_PRIORITY = "FinalPriority";
    const FIELD_TIME_ESTIMATED = "TimeEstimated";
    const FIELD_DUE = "Due";
    const FIELD_STARTS = "Starts";
    const FIELD_TEXT = "Text";

    const SEARCH_FORMAT=array(
        0=>"l",
        1=>"s",
        2=>"i"
    );
    const SEARCH_FORMAT_LONG="0";
    const SEARCH_FORMAT_ID="2";
    const SEARCH_FORMAT_SHORT="1";

    const ORDER_ASC="asc";
    const ORDER_DESC="desc";

}