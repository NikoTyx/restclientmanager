<?php

namespace nikotyx\restclientmanager\libraries;

/**
 * Interface Afin de gérer les appels REST à des application externes
 *
 * @package libraries\Rest\Client
 */
interface IRestClientManager
{
    /**
     * Méthode gérant le HTTP GET
     *
     * @param Client $client
     *
     * @return array
     */
    public function get(IClient $client) : array;

    /**
     * Méthode gérant le HTTP POST
     *
     * @param Client $client
     *
     * @return array
     */
    public function post(IClient $client) : array;

    /**
     * Méthode gérant le HTTP PUT
     *
     * @param Client $client
     *
     * @return array
     */
    public function put(IClient $client) : array;

    /**
     * Méthode gérant le HTTP DELETE
     *
     * @param Client $client
     *
     * @return array
     */
    public function delete(IClient $client) : array;

    /**
     * Méthode permettant d'afficher le contenu de l'appel REST
     *
     * @return mixed
     */
    public function debug() : void;
}