<?php

namespace libraries\Rest\Client;

/**
 * Implementation of IClient
 *
 * @package libraries\Rest\Client
 */
class Client implements IClient
{
    /** @var string|null webservice url to call */
    protected $url;

    /** @var array|null data to send to the webservice */
    protected $data;

    /** @var array|null Authentification informations */
    protected $auth;

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getAuth(): ?array
    {
        return $this->auth;
    }

    /**
     * @param array $auth
     * @return $this
     */
    public function setAuth(array $auth): self
    {
        $this->auth = $auth;
        return $this;
    }
}