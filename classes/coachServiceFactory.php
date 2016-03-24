<?php

//class coachServiceFactory implements factory
class coachServiceFactory 
{
    static $instance;
    public static function getInstance()
    {
        if ($this->$instace === null)
        {
            $this->$instance = new coachServiceFactory();
        }
        return $this->$instance;
    }

    public static function create($origin, $dest, $distance, $time, $checkExisting) //Where origin and dest are location objects
    {
        return new coachService($origin, $dest, $distance, $time, $checkExisting);
    }

    private function __construct()
    {
    }

}

    


