<?php

class coachService   //Represents one service in the DB
{

    private $origin;    //Origin, is location 
    private $destination;
    private $distance;
    private $time;
    private $stops;

    public function __construct($origin, $dest, $distance, $time)
    {
        if ($checkExisting === true)
        {
            //TODO Should check if coach service already exists
            //If it does, then fill the data with that data and somehow notify that this service already exists?
        }

        $this->origin = $origin;
        $this->destination = $dest;
        $this->distance = $distance;
        $this->time = $time;
    }
        


    public function getLocations()
    {
        $ret['origin'] = $this->origin;
        $ret['destination'] = $this->destination;
        return $ret;
    }
    public function getStops()
    {
        return $this->stops;
    }
    public function getTime()
    {
        return $this->time;
    }
    public function getDistance()
    {
        return $this->distance;
    }

}
?>

