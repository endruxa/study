<?php

namespace App;

use Core\App;
use Core\Request;

class TwitterController
{
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] =='POST') {
            $name = Request::getRequest(['name']);
            $msg = Request::getRequest(['msg']);
            $queryBuilder = App::get('queryBuilder');
            $queryBuilder->insert('twitter', [
                'name' => $name,
                'msg' => $msg,
            ]);
        }
        header('Location: /');

        view('twitter.twitter');
    }
}