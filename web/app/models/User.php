<?php

trait User
{
    use Model;
    protected $table = 'users';
    protected $id = 'user_id';
    protected $allowedColums;

    public function __construct()
    {
        $allowedColumnsByRole = [
            'admin' => ['ci', 'email', 'password', 'status', 'role'],
            'analyst' => ['ci', 'email', 'password', 'status', 'role'],
            'client' => ['email', 'password', 'status'],
        ];

        $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

        $this->allowedColums = array_key_exists($role, $allowedColumnsByRole)
            ? $allowedColumnsByRole[$role]
            : ['password', 'status'];
    }
}
