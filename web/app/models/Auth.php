<?php
class Auth
{
    use User;
    public function auth($post)
    {
        if (!is_numeric($post['ci'])) {
            $error = array(
                'session' => false,
                'status' => 502,
                'description' => '',
                'status' => '',
            );
            return json_encode($error);
        }
        $arr['ci'] = $post['ci'];
        $login = $this->first($arr);
        if (!empty($login)) {
            $hashedPassword = $login->password;
            if (password_verify($post['password'], $hashedPassword)) {
                $loginAuth = array(
                    'session' => true,
                    'id' => $login->id,
                    'user' => $login->ci,
                    'role' => $login->role,
                );
                return $_SESSION;
            } else {
                $error = array(
                    'session' => false,
                    'status' => 502,
                    'description' => '',
                    'status' => '',
                );
                show(json_encode($error));
                // location('login');
            }
        } else {
            location('login');
        }
    }
}
