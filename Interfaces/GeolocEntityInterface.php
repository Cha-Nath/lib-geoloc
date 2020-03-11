<?php

namespace nlib\Geoloc\Interfaces;

interface GeolocEntityInterface {
    
    /**
     *
     * @return integer
     */
    public function getGeolocID() : int;

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
     * @return array
     */
    public function getMaps() : array;

    /**
     *
     * @return string
     */
    public function getAddress() : string;

    /**
     *
     * @return string
     */
    public function getFormattedAddress() : string;
    
    /**
     *
     * @param integer $geolocid
     * @return self
     */
    public function setGeolocID(int $geolocid);

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
     * @param array $maps
     * @return self
     */
    public function setMaps(array $maps);

    /**
     *
     * @param string $address
     * @return self
     */
    public function setAddress(string $address);

    /**
     *
     * @param string $formattedaddress
     * @return self
     */
    public function setFormattedAddress(string $formattedaddress);
}