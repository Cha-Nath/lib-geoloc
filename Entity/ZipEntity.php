<?php

namespace nlib\Geoloc\Entity;

use nlib\Geoloc\Interfaces\ZipEntityInterface;

class ZipEntity implements ZipEntityInterface {

    private $_zipid;
    private $_zip;
    private $_locality;
    private $_submunicipality;
    private $_mainmunicipality;
    private $_district;
    private $_countryfid;

    #region Getter

    public function getZipID() : int { return $this->_zipid; }
    public function getZip() : string { return $this->_zip; }
    public function getLocality() : string { return $this->_locality; }
    public function getSubMunicipality() : int { return $this->_submunicipality; }
    public function getMainMunicipality() : string { return $this->_mainmunicipality; }
    public function getDistrict() : string { return $this->_district; }
    public function getCountryFID() : string { return $this->_countryfid; }

    #endregion

    #region Setter

    public function setZipID($zipid) : self { $this->_zipid = $zipid; return $this; }
    public function setZip($zip) : self { $this->_zip = $zip; return $this; }
    public function setLocality($locality) : self { $this->_locality = $locality; return $this; }
    public function setSubMunicipality($submunicipality) : self { $this->_submunicipality = $submunicipality; return $this; }
    public function setMainMunicipality($mainmunicipality) : self { $this->_mainmunicipality = $mainmunicipality; return $this; }
    public function setDistrict($district) : self { $this->_district = $district; return $this; }
    public function setCountryFID($countryfid) : self { $this->_countryfid = $countryfid; return $this; }

    #endregion
}