<?php

class location  //Represents a location in the DB
{
    private $name;
    private $latitude;
    private $longditude;

    public function __construct($name,$latitude, $longditude)
    {
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longditude = $longditude;

        //TODO Should check if service already exists. 
        //IF it does, then fill this class with that location data.
        //Else just fill it with the data we've been given

    }

    public function getName()
    {
        return $this->name;
    }

    public function getLatLong()
    {
        $ret['lat'] = $this->latitude;
        $ret['long'] = $this->longditude;
        return $ret;
    }
}

