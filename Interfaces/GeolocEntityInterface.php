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
     * @return float|null
     */
    public function getLatitude() : ?float;

   /**
    *
    * @return float|null
    */
    public function getLongitude() : ?float;

    /**
     *
     * @return array
     */
    public function getMaps() : array;

    /**
     *
     * @return string|null
     */
    public function getAddress() : ?string;

    /**
     *
     * @return string|null
     */
    public function getFormattedAddress() : ?string;
    
    /**
     *
     * @param integer $geolocid
     * @return self
     */
    public function setGeolocID(int $geolocid);

    /**
     *
     * @param float|null $latitude
     * @return self
     */
    public function setLatitude(?float $latitude);

    /**
     *
     * @param float|null $longitude
     * @return self
     */
    public function setLongitude(?float $longitude);

    /**
     *
     * @param array $maps
     * @return self
     */
    public function setMaps(array $maps);

    /**
     *
     * @param string|null $address
     * @return self
     */
    public function setAddress(?string $address);

    /**
     *
     * @param string|null $formattedaddress
     * @return self
     */
    public function setFormattedAddress(?string $formattedaddress);
}