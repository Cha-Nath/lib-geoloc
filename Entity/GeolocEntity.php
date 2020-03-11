<?php

namespace nlib\Geoloc\Entity;

use nlib\Geoloc\Interfaces\GeolocEntityInterface;
use nlib\Orm\Classes\Entity;

class GeolocEntity extends Entity implements GeolocEntityInterface, \JsonSerializable {

    private $_geolocid;
    private $_latitude;
    private $_longitude;
    private $_maps = [];
    private $_address;
    private $_formattedaddress;

    #region Getter
    
    public function getGeolocID() : int { return $this->_geolocid; }
    public function getLatitude() : float { return $this->_latitude; }
    public function getLongitude() : float { return $this->_longitude; }
    public function getMaps() : array { return $this->_maps; }
    public function getAddress() : string { return $this->_address; }
    public function getFormattedAddress() : string { return $this->_formattedaddress; }
    
    #endregion

    #region Setter
    
    public function setGeolocID(int $geolocid) : self { $this->_geolocid = $geolocid; return $this; }
    public function setLatitude(float $latitude) : self  { $this->_latitude = $latitude; $this->_maps['lat'] = $latitude; return $this; }
    public function setLongitude(float $longitude) : self  { $this->_longitude = $longitude; $this->_maps['lng'] = $longitude; return $this; }
    public function setMaps(array $maps) : self { $this->_maps = $maps; return $this; }
    public function setAddress(string $address) : self { $this->_address = $address; return $this; }
    public function setFormattedAddress(string $formattedaddress) : self { $this->_formattedaddress = $formattedaddress; return $this; }
    
    #endregion

    public function jsonSerialize() { return $this->__getProperties(get_object_vars($this), true); }
}