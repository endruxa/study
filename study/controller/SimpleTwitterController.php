<?php

namespace App;

use Core\Request;

class SimpleTwitterController
{
        public function index()
        {
            if($_SERVER['REQUEST_METHOD'] =='POST')
                $name=Request::getRequest('name');
                $msg=Request::getRequest('msg');


            view('simpletwitter');
        }
}