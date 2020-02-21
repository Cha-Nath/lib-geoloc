<?php

namespace nlib\Geoloc\Interfaces;

use nlib\Geoloc\Classes\Geoloc;

interface GeolocTraitInterface {

    /**
     *
     * @return Geoloc
     */
    public function Geoloc() : Geoloc;
    
    /**
     *
     * @param Geoloc $geoloc
     * @return self
     */
    public function setGeoloc(Geoloc $geoloc);
}