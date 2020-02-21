<?php

namespace nlib\Geoloc\Interfaces;

interface GeolocEntityInterface {
    
    /**
     *
     * @return float
     */
    public function getLatitude() : float;

    /**
     *
     * @return float
     */
    public function getLongitude() : float;

    /**
     *
     * @return string
     */
    public function getAddress() : string;
    
    /**
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude(float $latitude);

    /**
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude(float $longitude);

    /**
     *
     * @param string $address
     * @return self
     */
    public function setAddress(string $address);
}