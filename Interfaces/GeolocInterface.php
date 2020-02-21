<?php

namespace nlib\Geoloc\Interfaces;

use nlib\Geoloc\Entity\GeolocEntity;

interface GeolocInterface {

    /**
     *
     * @param string $address
     * @param string $googleapisKey
     * @return GeolocEntity
     */
    public function geoloc(string $address, string $googleapisKey) : GeolocEntity;
}