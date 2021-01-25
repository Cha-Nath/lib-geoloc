<?php

namespace nlib\Geoloc\Interfaces;

interface ZipEntityInterface {

    /**
     *
     * @return integer
     */
    public function getZipID() : int;

    /**
     *
     * @return string
     */
    public function getZip() : string;

    /**
     *
     * @return string
     */
    public function getLocality() : string;

    /**
     *
     * @return integer
     */
    public function getSubMunicipality() : int;

    /**
     *
     * @return string
     */
    public function getMainMunicipality() : string;

    /**
     *
     * @return string
     */
    public function getDistrict() : string;

    /**
     *
     * @return string
     */
    public function getCountryFID() : string;

    /**
     *
     * @param [type] $zipid
     * @return self
     */
    public function setZipID($zipid);

    /**
     *
     * @param [type] $zip
     * @return self
     */
    public function setZip($zip);

    /**
     *
     * @param [type] $locality
     * @return self
     */
    public function setLocality($locality);

    /**
     *
     * @param [type] $submunicipality
     * @return self
     */
    public function setSubMunicipality($submunicipality);

    /**
     *
     * @param [type] $mainmunicipality
     * @return self
     */
    public function setMainMunicipality($mainmunicipality);

    /**
     *
     * @param [type] $district
     * @return self
     */
    public function setDistrict($district);

    /**
     *
     * @param [type] $countryfid
     * @return self
     */
    public function setCountryFID($countryfid);
}