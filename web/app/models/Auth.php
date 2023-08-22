<?php
class Auth
{
    use User;
    public function auth($post)
    {
        if (!is_numeric($post['ci'])) {
            $error = array(
                        'status'=>'unknown',
                        'description'=>'',
                        'status'=>'',
                        'conection'=>'false',
                        );
            return $error;
        }
        $arr['ci'] = $post['ci'];
        $login = $this->first($arr);
        if (!empty($login)) {
            $hashedPassword = $login->password;
            if (password_verify($post['password'], $hashedPassword)) {
                return $login;
                // location('dashboard');
            } else {
                // show("password n't");
                location('login');
            }
        } else {
            location('login');
        }
    }
}
