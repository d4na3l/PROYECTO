<?php
class Auth
{
    use User;

    private function getResult($method, $data)
    {
        $result = array_merge([$method => true], $data);
        return $result;
    }

    private function getError($description, $method, $user = null)
    {
        $result = [
            $method => false,
            'status' => $user ? $user->status : 'unknown',
            'description' => $description
        ];
        if ($user) {
            $result['user'] = $user->ci;
        }

        return $result;
    }

    public function login($post)
    {
        if (!is_numeric($post['ci'])) {
            return $this->getError('Ingresar sólo números en el campo de cédula', 'session');
        }

        $user = $this->first(['ci' => $post['ci']]);
        if (empty($user)) {
            return $this->getError('Usuario no encontrado', 'session');
        }

        switch ($user->status) {
            case 'active':
                if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[.;*\/$&]){8,}/', $post['password'])) {
                    $hashedPassword = $user->password;
                    if (password_verify($post['password'], $hashedPassword)) {
                        $data = [
                            'id' => $user->user_id,
                            'user' => $user->ci,
                            'role' => $user->role,
                            'status' => $user->status,
                        ];
                        return $this->getResult('session', $data);
                    } else {
                        return $this->getError('Contraseña incorrecta', 'session', $user);
                    }
                } else {
                    return $this->getError('No se cumplen los requisitos de la contraseña', 'session', $user);
                }
                break;
            case 'pending':
                return $this->getError('Por favor, llenar el registro de usuario', 'session', $user);
                break;
            default:
                return $this->getError('Su usuario ha sido bloqueado', 'session', $user);
                break;
        }
    }

    public function signup($post)
    {
        if (empty($post["ci"]) || empty($post["password"]) || empty($post["verify_password"])) {
            return $this->getError('Por favor, complete todo el registro de usuario', 'signup');
        }
        if (!is_numeric($post['ci'])) {
            return $this->getError('Ingresar sólo números en el campo de cédula', 'signup');
        }
        $user = $this->first(['ci' => $post['ci']]);

        if (empty($user)) {
            return $this->getError('Usuario no encontrado', 'signup');
        }
        switch ($user->status) {
            case 'pending':
                if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[.;*\/$&]){8,}/', $post['password'])) {
                    if ($post['password'] === $post['verify_password']) {
                        $data = [
                            'id' => $user->user_id,
                            'password' => password_hash($post['password'], PASSWORD_BCRYPT, ['cost' => 15]),
                            'role' => $user->role,
                            'status' => 'active',
                        ];
                        return $this->getResult('signup', $data);
                    } else {
                        return $this->getError('Las contraseñas no coinciden', 'signup', $user);
                    }
                } else {
                    return $this->getError('No se cumplen los requisitos de la contraseña', 'signup', $user);
                }
                break;
            case 'active':
                return $this->getError('Su usuario ya está registrado', 'signup', $user);
                break;
            default:
                return $this->getError('Su usuario ha sido bloqueado', 'signup', $user);
                break;
        }
    }
}
