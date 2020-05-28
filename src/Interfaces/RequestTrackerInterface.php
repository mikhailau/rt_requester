<?php


namespace Mikhailau\Rt\Requester\Interfaces;


/**
 * Interface RequestTrackerInterface
 * @package Mikhailau\Rt\Requester\Interfaces
 */
interface RequestTrackerInterface
{
    /**
     * Gets the data for a single ticket, not including the history and comments.
     * @param string $tickerId
     * @param array $data
     * @return mixed
     */
    public function getTicket(string $tickerId, array $data = []);

    /**
     * Gets the ticket links for a single ticket.
     * @param string $tickerId
     * @param array $data
     * @return mixed
     */
    public function getTicketLinks(string $tickerId, array $data = []);

    /**
     * Gets a list of all the history items for a given ticket
     * @param string $tickerId
     * @param array $data
     * @param bool $longFormat
     * @return mixed
     */
    public function getTicketHistory(string $tickerId, array $data = [], bool $longFormat = false);

    /**
     * Gets the history information for a single history item. Note that the history item must actually correspond to the ticket.
     * @param string $tickerId
     * @param string $historyId
     * @param array $data
     * @return mixed
     */
    public function getTicketHistoryEntry(string $tickerId, string $historyId, array $data = []);

    /**
     * Gets a list of all attachments related to the ticket
     * @param string $tickerId
     * @param array $data
     * @return mixed
     */
    public function getTicketAttachments(string $tickerId, array $data = []);

    /**
     * Gets the metadata and content of a specific attachment.
     * @param string $tickerId
     * @param string $attachmentId
     * @param array $data
     * @return mixed
     */
    public function getTicketAttachment(string $tickerId, string $attachmentId, array $data = []);

    /**
     * Gets the attachment data content without additional metadata or whitespace characters
     * @param string $tickerId
     * @param string $attachmentId
     * @param array $data
     * @return mixed
     */
    public function getTicketAttachmentContent(string $tickerId, string $attachmentId, array $data = []);


}