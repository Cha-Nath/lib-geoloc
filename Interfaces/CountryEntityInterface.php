<?php

namespace nlib\Geoloc\Interfaces;

interface CountryEntityInterface {

    /**
     *
     * @return integer
     */
    public function getCountryID() : int;

    /**
     *
     * @return string
     */
    public function getAlpha2() : string;

    /**
     *
     * @return string
     */
    public function getAlpha3() : string;

    /**
     *
     * @return string
     */
    public function getName() : string;

    /**
     *
     * @return string
     */
    public function getCodeLanguage() : string;

    /**
     *
     * @param [type] $countryid
     * @return self
     */
    public function setCountryID($countryid);

    /**
     *
     * @param [type] $alpha2
     * @return self
     */
    public function setAlpha2($alpha2);

    /**
     *
     * @param [type] $alpha3
     * @return self
     */
    public function setAlpha3($alpha3);

    /**
     *
     * @param [type] $name
     * @return self
     */
    public function setName($name);

    /**
     *
     * @param [type] $codelanguage
     * @return self
     */
    public function setCodeLanguage($codelanguage);
}