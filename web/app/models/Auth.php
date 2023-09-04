<?php
class Auth
{
    use User;
    public function login($post)
    {
        if (is_numeric($post['ci'])) {
            $arr['ci'] = $post['ci'];
            $login = $this->first($arr);
            if (!empty($login)) {
                if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[\w.;*\/$&]{8,}$/', $post['password'])) {
                    if ($login->status === 'active') {
                        $hashedPassword = $login->password;
                        if (password_verify($post['password'], $hashedPassword)) {
                            return array(
                                'session' => true,
                                'id' => $login->id,
                                'user' => $login->ci,
                                'role' => $login->role,
                                'status' => $login->status,
                            );
                        } else {
                            return array(
                                'session' => false,
                                'user' => $login->ci,
                                'status' => $login->status,
                                'description' => 'Contraseña incorrecta',
                            );
                        }
                    } else if ($login->status === 'pending') {
                        return array(
                            'session' => false,
                            'user' => $login->ci,
                            'status' => $login->status,
                            'description' => 'Por favor, llenar el registro de usuario'
                        );
                    } else {
                        return array(
                            'session' => false,
                            'status' => $login->status,
                            'description' => 'Su usuario ha sido bloqueado',
                        );
                    }
                } else {
                    return array(
                        'session' => false,
                        'status' => $login->status,
                        'description' => 'No se cumplen los requisitos de la contraseña',
                    );
                }
            } else {
                return array(
                    'session' => false,
                    'status' => 'unknown',
                    'description' => 'Usuario no encontrado',
                );
            }
        } else {
            return array(
                'session' => false,
                'status' => 'unknown',
                'description' => 'Ingresar sólo números en el campo de cédula',
            );
        }
    }

    public function signup($post)
    {
        if (!empty($post["ci"]) && !empty($post["first_name"]) && !empty($post["last_name"]) && !empty($post["password"]) && !empty($post["verify_password"]) && !empty($post["email"])) {
            if (is_numeric($post["ci"])) {
                show($post);
            } else {
                return array(
                    'session' => false,
                    'status' => 'unknown',
                    'description' => 'Por favor, ingresar sólo numeros en el campo de cédula',
                );
            }
        } else {
            return array(
                'session' => false,
                'status' => 'unknown',
                'description' => 'Por favor, complete todo el registro de usuario',
            );
        }
    }
}
