<?php

//class taskFactory implements factory   //Returns objects for the services Is a singleton
class taskFactory    //Returns objects for the services Is a singleton
{
    private static $instance;

    public static function getInstance($service)
    {
        if (null === taskFactory::$instance)
        {
            taskFactory::$instance = new taskFactory();
        }
        return taskFactory::$instance;
    }

    public static function create($service)
    {
        echo "creating serviec";
        if ($service === "add")
        {   return new addService();    }
        else if ($service === "delete")
        {   return new deleteService();    }
        else if ($service === "amend")
        {   return new amendService();    }
        else if ($service === "amend")
        {   return new amendService();    }
        else if ($service === "bookingReport")
        {   return new bookingReport();    }
    }

    private function __construct()  //Because this is a singleton?
    {}
    private function __clone()
    {}
    private function __wakeup()
    {}

}



?>






