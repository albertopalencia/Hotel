<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        
        require './views/_templates/header.php';
        require './views/home/index.php';
        require './views/_templates/footer.php';
    }

    
    public function exampleOne()
    {
        
        require './views/_templates/header.php';
        require './views/home/example_one.php';
        require './views/_templates/footer.php';
    }

    
    public function exampleTwo()
    {
        
        require './views/_templates/header.php';
        require './views/home/example_two.php';
        require './views/_templates/footer.php';
    }

    
}
