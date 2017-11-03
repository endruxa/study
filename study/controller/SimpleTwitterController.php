<?php

namespace App;

use Core\App;

class SimpleTwitterController
{
        public function index()
        {
            if($_SERVER['REQUEST_METHOD'] =='POST') {
                $name=$_POST['name'];
                $msg=$_POST['msg'];
        preg_replace('/(@(\w+)\b)/', '<a href="http://twitter.com/2"></a>', $msg);
                /**@var \Core\DB\QueryBuilder $queryBuilder */
                $queryBuilder=App::get('queryBuilder');
                $queryBuilder->insert('twitter', [
                    'name' => $name,
                    'msg' => $msg
                ]);
            }

            view('simpletwitter');
        }
}