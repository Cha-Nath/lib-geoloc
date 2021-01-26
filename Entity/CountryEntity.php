<?php

namespace nlib\Geoloc\Entity;

use nlib\Geoloc\Interfaces\CountryEntityInterface;
use nlib\Orm\Classes\Entity;

class CountryEntity extends Entity implements CountryEntityInterface {

    private $_countryid;
    private $_alpha2;
    private $_alpha3;
    private $_name;
    private $_codelanguage;

    #region Getter

    public function getCountryID() : int { return $this->_countryid; }
    public function getAlpha2() : string { return $this->_alpha2; }
    public function getAlpha3() : string { return $this->_alpha3; }
    public function getName() : string { return $this->_name; }
    public function getCodeLanguage() : string { return $this->_codelanguage; }

    #endregion

    #region Setter

    public function setCountryID($countryid) : self { $this->_countryid = $countryid; return $this; }
    public function setAlpha2($alpha2) : self { $this->_alpha2 = $alpha2; return $this; }
    public function setAlpha3($alpha3) : self { $this->_alpha3 = $alpha3; return $this; }
    public function setName($name) : self { $this->_name = $name; return $this; }
    public function setCodeLanguage($codelanguage) : self { $this->_codelanguage = $codelanguage; return $this; }

    #endregion
}