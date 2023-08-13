<?php
class Auth
{
    use User;
    public function auth($post)
    {
        $arr['ci'] = $post['ci'];
        $login = $this->first($arr);
        if (!empty($login)) {
            $hashedPassword = $login->password;
            if (password_verify($post['password'], $hashedPassword)) {
                $_SESSION['id'] = $login->id;
                $_SESSION['session'] = true;
                $_SESSION['user'] = $login->ci;
                location('dashboard');
            } else {
                location('login');
            }
        } else {
            location('login');
        }
    }
}
