<?php

namespace Mikhailau\Rt\Requester;

use Mikhailau\Rt\Requester;

class RequestTracker implements Requester\Interfaces\RequestTrackerInterface
{
    protected $curl;
    protected $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->curl = new Curl();
        $this->baseUrl = $baseUrl;
    }

    public function getTicket(string $tickerId, array $data = [])
    {
        $result = $this->doQuery(new Requester\Rt\Ticket\TicketShow($tickerId, $data));
        return $this->parseData($result);

    }

    public function getTicketAttachment(string $tickerId, string $attachmentId, array $data = [])
    {
        $result = $this->doQuery(new Requester\Rt\Ticket\TicketAttachment($tickerId, $attachmentId, $data));
        return $this->parseData($result);
    }

    public function getTicketAttachmentContent(string $tickerId, string $attachmentId, array $data = [])
    {
        $result = $this->doQuery(new Requester\Rt\Ticket\TicketAttachmentContent($tickerId, $attachmentId, $data));
        return $this->parseData($result);
    }

    public function getTicketAttachments(string $tickerId, array $data = [])
    {
        $result = $this->doQuery(new Requester\Rt\Ticket\TicketAttachments($tickerId, $data));
        return $this->parseData($result);
    }

    public function getTicketHistory(string $tickerId, array $data = [], bool $longFormat = false)
    {
        $result = $this->doQuery(new Requester\Rt\Ticket\TicketHistory($tickerId, $data, $longFormat));
        return $this->parseData($result);
    }

    public function getTicketHistoryEntry(string $tickerId, string $historyId, array $data = [])
    {
        $result = $this->doQuery(new Requester\Rt\Ticket\TicketHistoryEntry($tickerId, $historyId, $data));
        return $this->parseData($result);
    }

    public function getTicketLinks(string $tickerId, array $data = [])
    {
        $result = $this->doQuery(new Requester\Rt\Ticket\TicketLinks($tickerId, $data));
        return $this->parseData($result);
    }

    protected function parseData(Curl $result): array
    {
        var_dump($result);
        print_r($result->response);
        // TODO: Add dataparsers
        return array();
    }

    protected function doQuery(Requester\Interfaces\QueryMakerInterface $queryMaker)
    {
        $this->curl->setOptions($queryMaker->getOptions());
        $url = $queryMaker->getUrl();
        $url = $this->baseUrl . $url;
        $data = $queryMaker->getData();
        return $this->curl->{$queryMaker->type::TYPE}(
            $url,
            $data
        );

    }


}