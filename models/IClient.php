<?php

namespace libraries\Rest\Client;

/**
 * This interface defines methods for the IClient implementation
 *
 * @package libraries\Rest\Client
 */
interface IClient
{
    /**
     * Retrieves the webservice url to call
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * Retrieves data to send to the webservice
     * @return array|null
     */
    public function getData(): ?array;

    /**
     * Retrieves authentifications informations
     * @return array|null
     */
    public function getAuth(): ?array;
}