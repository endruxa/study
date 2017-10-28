<?php
namespace App;

use PDO;
use Core\App;
use Core\Request;

class RegisterController
{
    public function index()
    {
        /** @var \Core\DB\QueryBuilder $queryBuilder */
        $queryBuilder = App::get('queryBuilder');
        $queryBuilder->insert('tut', ['title' => 'test']);
        view('register.index');
    }

    public function store()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = Request::getRequest('name');
            $email = Request::getRequest('email');
            /** @var \Core\DB\QueryBuilder $queryBuilder */
            $queryBuilder = App::get('queryBuilder');
            $queryBuilder->insert('users', [
                'name' => $name,
                'email' => $email,
                'age' => mt_rand(18, 40)
            ]);
        }

        header('Location: /');
    }

    public function register()
    {
        if(Request::isPost()){
            $pdo = new PDO('mysql:dbname=study;host=localhost', 'root', '');

            $name = $pdo->quote($_POST['name']);
            $pass = $pdo->quote($_POST['password']);

            $sql = "INSERT INTO people(name, password) VALUES ($name, $pass)";

            $pdo->exec($sql);

            Request::goBack();
        }

        view('register.register');
    }
}