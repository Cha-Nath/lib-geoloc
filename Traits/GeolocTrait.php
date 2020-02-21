<?php

namespace nlib\Geoloc\Traits;

use nlib\Geoloc\Classes\Geoloc;

trait GeolocTrait {

    private $_geoloc;

    #region Getter

    public function Geoloc() : Geoloc {
        if(empty($this->_geoloc)) $this->setGeoloc(new Geoloc());
        return $this->_geoloc;
    }

    #endregion

    #region Setter
    
    public function setGeoloc(Geoloc $geoloc) : self { $this->_geoloc = $geoloc; return $this; }

    #endregion
}