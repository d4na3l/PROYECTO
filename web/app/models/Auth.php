<?php
class Auth
{
    use User;
    public function auth($post)
    {
        if (!is_numeric($post['ci'])) {
            $error = array(
                'session' => false,
                'status' => '',
                'description' => 'Ingresar sólo números en el campo de cédula',
            );
            return $error;
        }
        $arr['ci'] = $post['ci'];
        $login = $this->first($arr);
        if (!empty($login)) {
            if ($login->status === 'active') {
                $hashedPassword = $login->password;
                if (password_verify($post['password'], $hashedPassword)) {
                    $loginAuth = array(
                        'session' => true,
                        'id' => $login->id,
                        'user' => $login->ci,
                        'role' => $login->role,
                        'status' => $login->status,
                    );
                    return $loginAuth;
                } else {
                    $error = array(
                        'session' => false,
                        'user' => $login->ci,
                        'status' => $login->status,
                        'description' => 'Contraseña incorrecta',
                    );
                    return $error;
                }
            } else if ($login->status === 'pending') {
                $error = array(
                    'session' => false,
                    'status' => $login->status,
                    'description' => 'Crear formulario de usuario',
                );
                return $error;
            } else {
                $error = array(
                    'session' => false,
                    'status' => $login->status,
                    'description' => 'Su usuario ha sido bloqueado',
                );
                return $error;
            }
        } else {
            $error = array(
                'session' => false,
                'status' => 'unknown',
                'description' => 'Usuario no encontrado',
            );
            return $error;
        }
    }
}
