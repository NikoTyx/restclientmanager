<?php

namespace nikotyx\restclientmanager\libraries;

use Exception;

/**
 * This class defines the factory methods to instance a restclient Manager
 */
class RestClientFactory
{
    /** @var array List of available drivers */
    protected static $drivers = ["restclient"];

    /**
     *  Creates and return a RestclientManager instance
     *
     * @param string $driver
     *
     * @return IRestClientManager
     * @throws Exception
     */
    public static function getInstance(string $driver) : IRestClientManager
    {
        if(empty($driver)) {
            throw new Exception("Aucun driver fournis");
        }

        if (!in_array($driver, static::$drivers)) {
            throw new Exception("Driver demandé inexistant");
        }

        return static::{"get".ucfirst($driver)}();
    }

    /**
     * Returns a Restclient
     *
     * @return Restclient
     */
    public static function getRestclient() : Restclient
    {
        return new Restclient();
    }
}