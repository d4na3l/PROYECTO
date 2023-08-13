<?php

trait User
{
    use Model;
    protected $table = 'users';

    protected $allowedColums = [
        'ci',
        'name',
        'last_name',
        'email',
        'password',
    ];
}
