<?php

use \Glial\Synapse\Controller;

class Home extends Controller
{

    function index()
    {
        $this->layout_name = 'default';


        $this->title = '<span style="font-size:2rem" class="glyphicon glyphicon-home" aria-hidden="true"></span> '.__("Home");
        $this->ariane = " > " . __("Welcome to my first page with Glial !");

        //$this->javascript = array("");
    }

    function test()
    {


        while (true) {
            echo "sfgdfhg".PHP_EOL;
            sleep(2);
        }
    }

}
