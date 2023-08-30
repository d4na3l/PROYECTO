<?php
class Auth
{
    use User;
    public function auth($post)
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
                        if (array_key_exists('verify_password', $post)) {
                            if ($post['verify_password'] === $post['password']) {
                                return array(
                                    'session' => false,
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
                                    'description' => 'Las contraseñas no coinciden'
                                );
                            }
                        } else {
                            return array(
                                'session' => false,
                                'user' => $login->ci,
                                'status' => $login->status,
                                'description' => 'Por favor, llenar el registro de usuario'
                            );
                        }
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
}
