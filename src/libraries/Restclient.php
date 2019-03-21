<?php

namespace nikotyx\restclientmanager\libraries;

/**
 * Utilisation de la librairie Restclient pour tous les appels WS
 *
 * @package libraries\Rest\Client
 */
class Restclient implements IRestClientManager
{
    private $CI;

    /**
     * Restclient constructor.
     */
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load
            ->add_package_path(RESTCLIENT_PATH)
            ->library('restclient')
            ->remove_package_path(RESTCLIENT_PATH);
    }

    /**
     * @inheritDoc
     */
    public function get(IClient $client): array
    {
        return $this->manage_return($this->CI->restclient->get($client->getUrl(), $client->getData(), $client->getAuth()), $client);
    }

    /**
     * @inheritDoc
     */
    public function post(IClient $client): array
    {
        return $this->manage_return($this->CI->restclient->post($client->getUrl(), $client->getData(), $client->getAuth()), $client);
    }

    /**
     * @inheritDoc
     */
    public function put(IClient $client): array
    {
        return $this->manage_return($this->CI->restclient->post($client->getUrl(), $client->getData(), $client->getAuth()), $client);
    }

    /**
     * @inheritDoc
     */
    public function delete(IClient $client): array
    {
        return $this->manage_return($this->CI->restclient->post($client->getUrl(), $client->getData(), $client->getAuth()), $client);
    }

    /**
     * @inheritDoc
     */
    public function debug(): void
    {
        $this->CI->restclient->debug();
    }

    /**
     * Gère proprement le retour des appels WS
     *
     * @param        $response
     * @param Client $client
     *
     * @return array
     */
    protected function manage_return($response, IClient $client)
    {
        return is_array($response) ? $response : ["status" => false, "error" => "Impossible de contacter ".$client->getUrl(), "value" => null];
    }
}