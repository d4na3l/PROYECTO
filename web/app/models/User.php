<?php

<<<<<<< HEAD
class User
{
    use Model;
    protected $table = 'User';
=======
trait User
{
    use Model;
    protected $table = 'users';
>>>>>>> chris

    protected $allowedColums = [
        'ci',
        'name',
        'last_name',
        'email',
        'password',
    ];
}
