<?php

class operatorUI
{

    private $error;
    private $errorString;
    private $output;

    //TODO Put the form stuff into a function!
    private $defaultOutput = 
         '<div class="row">
            <div class="col-xs-6 col-md-4">
                <h1>Operator Home</h1>
            </div>
            <div class="col-xs-6 col-md-4">
                <h3>Pick an operation to perform</h3>";
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <p class="text-center"> Add</p>
                <form action="operatorHome.php?task=add" method="post">
                <div class="form-group">
                    <label for="origin">Origin Town Name</label>
                    <input type="text" class="form-control" id="origin" name="origin" placeholder="Town Name">
                </div>
                <div class="form-group">
                    <label for="originlat">Origin town latitude</label>
                    <input type="text" class="form-control" id="originlat" name="originlat" placeholder="latitude">
                </div>
                <div class="form-group">
                    <label for="originlong">Origin town longditude</label>
                    <input type="text" class="form-control" id="originlong" name="originlat" placeholder="longditude">
                </div>
                <div class="form-group">
                    <label for="dest">Destination Town Name</label>
                    <input type="text" class="form-control" id="dest" name="dest" placeholder="Town Name">
                </div>
                <div class="form-group">
                    <label for="destlat">Destination town latitude</label>
                    <input type="text" class="form-control" id="destlat" name="destlat" placeholder="latitude">
                </div>
                <div class="form-group">
                    <label for="destlong">Destination town longditude</label>
                    <input type="text" class="form-control" id="destlong" name="destlat" placeholder="longditude">
                </div>
                <div class="form-group">
                    <label for="distance">Distance</label>
                    <input type="text" class="form-control" id="distance" name="distance" placeholder="distance">
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" id="time" name="time" placeholder="time">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
            <div class="col-xs-6 col-md-4">
                <p class="text-center"> Amend</p>
                <form action="operatorHome.php?task=amend" method="post">
                <div class="form-group">
                    <label for="origin">Origin Town Name</label>
                    <input type="text" class="form-control" id="origin" name="origin" placeholder="Town Name">
                </div>
                <div class="form-group">
                    <label for="originlat">Origin town latitude</label>
                    <input type="text" class="form-control" id="originlat" name="originlat" placeholder="latitude">
                </div>
                <div class="form-group">
                    <label for="originlong">Origin town longditude</label>
                    <input type="text" class="form-control" id="originlong" name="originlat" placeholder="longditude">
                </div>
                <div class="form-group">
                    <label for="dest">Destination Town Name</label>
                    <input type="text" class="form-control" id="dest" name="dest" placeholder="Town Name">
                </div>
                <div class="form-group">
                    <label for="destlat">Destination town latitude</label>
                    <input type="text" class="form-control" id="destlat" name="destlat" placeholder="latitude">
                </div>
                <div class="form-group">
                    <label for="destlong">Destination town longditude</label>
                    <input type="text" class="form-control" id="destlong" name="destlat" placeholder="longditude">
                </div>
                <div class="form-group">
                    <label for="distance">Distance</label>
                    <input type="text" class="form-control" id="distance" name="distance" placeholder="distance">
                </div>
                <div class="form-group">
                    <label for="selectfield">Select Field to Change</label>
                    <select class="form-control" id="selectfield">
                    <option value="1">Origin Town Name</option>
                    <option value="2">Origin Town Latitude</option>
                    <option value="3">Origin Town Longditude</option>
                    <option value="4">Destination Town Name</option>
                    <option value="5">destination town latitude</option>
                    <option value="6">destination town longditude</option>
                    <option value="7">Distance</option>
                    <option value="8">Time</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="data">Input Data</label>
                    <input type="text" class="form-control" id="data" name="data" placeholder="">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="col-xs-6 col-md-4">
                <p class="text-center"> delete</p>
                <form action="operatorHome.php?task=delete" method="post">
                <div class="form-group">
                    <label for="origin">Origin Town Name</label>
                    <input type="text" class="form-control" id="origin" name="origin" placeholder="Town Name">
                </div>
                <div class="form-group">
                    <label for="originlat">Origin town latitude</label>
                    <input type="text" class="form-control" id="originlat" name="originlat" placeholder="latitude">
                </div>
                <div class="form-group">
                    <label for="originlong">Origin town longditude</label>
                    <input type="text" class="form-control" id="originlong" name="originlat" placeholder="longditude">
                </div>
                <div class="form-group">
                    <label for="dest">Destination Town Name</label>
                    <input type="text" class="form-control" id="dest" name="dest" placeholder="Town Name">
                </div>
                <div class="form-group">
                    <label for="destlat">Destination town latitude</label>
                    <input type="text" class="form-control" id="destlat" name="destlat" placeholder="latitude">
                </div>
                <div class="form-group">
                    <label for="destlong">Destination town longditude</label>
                    <input type="text" class="form-control" id="destlong" name="destlat" placeholder="longditude">
                </div>
            </div>
        </div>
        ';

    public function showUI()    //Displays the task selection box
    {
        if ($this->output == null)
        {
            echo $this->defaultOutput;
        }
        else
        {   echo $this->output;    }

    }
    public function pickTask($task)
    {
        return taskFactory::create($task);
    }
    
    public function setError($err)
    {
        $this->errorString = $err;
        $this->error = true;
    }

    public function setOutput($out)
    {
        $this->output = $out;
    }

    public function __construct()
    {
    }
    

    
}
