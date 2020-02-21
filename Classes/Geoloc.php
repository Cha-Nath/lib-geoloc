<?php

namespace nlib\Geoloc\Classes;

use nlib\Geoloc\Interfaces\GeolocInterface;
use nlib\Geoloc\Entity\GeolocEntity;
use nlib\cURL\Traits\cURLTrait;
use nlib\Log\Traits\LogTrait;
use nlib\Orm\Traits\EntityTrait;

class Geoloc implements GeolocInterface {

    use LogTrait;
    use EntityTrait;
    use cURLTrait;

    public function geoloc(string $address, string $googleapisKey) : GeolocEntity {

        $entity = $this->Entity('nlib\Geoloc\Entity\GeolocEntity');
        
        $this->log([
            'Geoloc' => json_encode(['address' => $address, 'gooleapisKey' => $googleapisKey])
        ]);

        if(!empty($address) && !empty($googleapisKey)) :
        
            $address = urlencode($address);
            $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=' . $googleapisKey;

            $res = json_decode($this->cURL($url)->get(), true);
            
            if($res['status'] === 'OK') :
                
                $entity->setLatitude($res['results'][0]['geometry']['location']['lat'] ?? 0)
                ->setLongitude($res['results'][0]['geometry']['location']['lng'] ?? 0)
                ->setAddress($res['results'][0]['formatted_address'] ?? '');
                
            else :
                $a = urldecode($address);
                $this->log(['Geoloc - error' => $res['status'] . ' "' . $a . '"']);
            endif;
        endif;

        return $entity;
    }
}