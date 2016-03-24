<?php

interface task
{
    public function performTask($args);
    public function getName();
    public function getError(); //returns error string for task. Null on success
    public function getOutput();    //Returns any output strings from the tasks
}



class addService implements task   //Takes a service object, and adds it to the DB
{
    private $name = "add";
    private $error = null;
    private $output = null;



    public function getName()
    {
        return $this->name;
    }

    public function performTask($args)
    {
        $this->add($args);


        return null; //True on success
        //$this->$error =  "Could not add to database"; Set error string on failure
        //return false //false on failure
    }


    private function add($s)
    {
        $this->output = 
            ' <div clas="container-fluid">
                <h3 class="text-center"> Added New Coach Service: </h3>
                <p> Origin: '.$s->getLocations()[0].'</p></div>
                <p> Destination: '.$s->getLocations()[1].'</p>
            ';
    }

    public function getError()
    {   return $this->error;   }
    
    public function getOutput()
    {
        if ($this->error == null)  //Return any output string
        {   return $this->output;}
        else
        {   return $this->error;   }   //Return an error if we have one instead
    }
}

class amendService  implements task//Takes a field, and some data, and a service object and makes a change to that service.
{
    private $name = "add";
    private $error = null;
    private $output = null;

    public function getName()
    {
        return $this->name;
    }

    public function performTask($args)
    {
        $this->amend($args[0], $args[1], $args[2]);
        return null; //True on success
        //$this->$error =  "Could not add to database"; Set error string on failure
        //return false //false on failure
    }

    private function amend($field, $data, $s)
    {
    }

    public function getError()
    {   return $this->error;   }

    public function getOutput()
    {
        if ($this->error == null)  //Return any output string
        {   return $this->output;}
        else
        {   return $this->error;   }   //Return an error if we have one instead
    }
}

class deleteService implements task//Takes a service object, and removes it from the database. Might also remove any bookings attached to this service.
{
    private $name = "add";
    private $error = null;
    private $output = null;

    public function getName()
    {
        return $this->$name;
    }

    public function performTask($args)
    {
        $this->delete($args);
        return null; //True on success
        //$this->$error =  "Could not add to database"; Set error string on failure
        //return false //false on failure
    }

    private function delete($s)
    {
    }

    public function getError()
    {   return $this->$error;   }

    public function getOutput()
    {
        if ($this->$error == null)  //Return any output string
        {   return $this->$output;}
        else
        {   return $this->$error;   }   //Return an error if we have one instead
    }
}

class bookingReport implements task //This is technically George's thing, i think...
{
    private $name = "add";
    private $error = null;
    private $output = null;
    
    public function getName()
    {
        return $this->$name;
    }

    public function performTask($args)
    {
        $this->report();

        return null; //True on success
        //$this->$error =  "Could not add to database"; Set error string on failure
        //return false //false on failure
    }

    private function report()
    {
    }

    public function getError()
    {   return $this->$error;   }


    public function getOutput()
    {
        if ($this->$error == null)  //Return any output string
        {   return $this->$output;}
        else
        {   return $this->$error;   }   //Return an error if we have one instead
    }

}

?>

