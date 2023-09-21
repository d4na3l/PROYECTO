<?php
class Auth
{
    use User;
    public function login($post)
    {
        if (is_numeric($post['ci'])) {
            $arr['ci'] = $post['ci'];
            $user = $this->first($arr);
            if (!empty($user)) {
                if ($user->status === 'active') {
                    if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[.;*\/$&]){8,}/', $post['password'])) {
                        $hashedPassword = $user->password;
                        if (password_verify($post['password'], $hashedPassword)) {
                            return array(
                                'session' => true,
                                'id' => $user->id,
                                'user' => $user->ci,
                                'role' => $user->role,
                                'status' => $user->status,
                            );
                        } else {
                            return array(
                                'session' => false,
                                'user' => $user->ci,
                                'status' => $user->status,
                                'description' => 'Contraseña incorrecta',
                            );
                        }
                    } else {
                        return array(
                            'session' => false,
                            'status' => $user->status,
                            'description' => 'No se cumplen los requisitos de la contraseña',
                        );
                    }
                } else if ($user->status === 'pending') {
                    return array(
                        'session' => false,
                        'user' => $user->ci,
                        'status' => $user->status,
                        'description' => 'Por favor, llenar el registro de usuario'
                    );
                } else {
                    return array(
                        'session' => false,
                        'status' => $user->status,
                        'description' => 'Su usuario ha sido bloqueado',
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
        if (!empty($post["ci"]) && !empty($post["password"]) && !empty($post["verify_password"])) {
            if (is_numeric($post["ci"])) {
                $arr['ci'] = $post['ci'];
                $user = $this->first($arr);
                if (!empty($user)) {
                    if ($user->status === 'pending') {
                        if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[.;*\/$&]){8,}/', $post['password'])) {
                            if ($post['password'] === $post['verify_password']) {
                                return array(
                                    'register' => true,
                                    'id' => $user->id,
                                    'password' => password_hash($post['password'], PASSWORD_BCRYPT, ['cost' => 15]),
                                    'status' => 'active',
                                );
                            } else {
                                return array(
                                    'register' => false,
                                    'status' => $user->status,
                                    'description' => 'Las contraseñas no coinciden',
                                );
                            }
                        } else {
                            return array(
                                'register' => false,
                                'status' => $user->status,
                                'description' => 'No se cumplen los requisitos de la contraseña',
                            );
                        }
                    } else if ($user->status === 'active') {
                        return array(
                            'register' => false,
                            'user' => $user->ci,
                            'status' => $user->status,
                            'description' => 'Su usuario ya está registrado'
                        );
                    } else {
                        return array(
                            'register' => false,
                            'status' => $user->status,
                            'description' => 'Su usuario ha sido bloqueado, contacte a soporte',
                        );
                    }
                } else {
                    return array(
                        'register' => false,
                        'status' => 'unknown',
                        'description' => 'Usuario no encontrado',
                    );
                }
            } else {
                return array(
                    'register' => false,
                    'status' => 'unknown',
                    'description' => 'Por favor, ingresar sólo numeros en el campo de cédula',
                );
            }
        } else {
            return array(
                'register' => false,
                'status' => 'unknown',
                'description' => 'Por favor, complete todo el registro de usuario',
            );
        }
    }
}
