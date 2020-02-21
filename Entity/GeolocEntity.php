<?php

namespace nlib\Geoloc\Entity;

use nlib\Geoloc\Interfaces\GeolocEntityInterface;
use nlib\Orm\Classes\Entity;

class GeolocEntity extends Entity implements GeolocEntityInterface {

    private $_latitude;
    private $_longitude;
    private $_address;

    #region Getter
    
    public function getLatitude() : float { return $this->_latitude; }
    public function getLongitude() : float { return $this->_longitude; }
    public function getAddress() : string { return $this->_address; }
    
    #endregion

    #region Setter
    
    public function setLatitude(float $latitude) : self { $this->_latitude = $latitude; return $this; }
    public function setLongitude(float $longitude) : self { $this->_longitude = $longitude; return $this; }
    public function setAddress(string $address) : self { $this->_address = $address; return $this; }
    
    #endregion
}