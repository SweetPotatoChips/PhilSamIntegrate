<?php


//class locationFactory implements factory   //Creates new location object
class locationFactory    //Creates new location object
{

    private static $instance;

    public static function getInstance()
    {
        if ($instance === null)
        {
            $instance = new locationFactory();
        }
        return $instance;
    }

    public static function create($name, $latitude, $longditude)
    {
        return new location($name,$latitude, $longditude);
    }

    
}

?>
