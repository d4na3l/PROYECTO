<?php

class Signup extends Controller
{
    use user;
    public function index($section, $param)
    {
        if (isset($_SESSION['session'])) {
            location('dashboard');
        }
        $viewPath = $section;

        // Comprobamos que existan parámetros de la vista.
        if ($param) {
            //Añadimos los parámetros de la vista y acomodamos el viewpath a conveniencia.
            $param = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $param);
            $viewPath .= '/' . $param;
        }
        $this->view($viewPath);
    }

    public function signup()
    {
        $putData = file_get_contents("php://input");
        $put = json_decode($putData, true);

        $auth = new Auth;
        $signup = $auth->signup($put);
        if (!$signup['signup']) {
            if ($signup['status'] == 'active') {
                response($signup, 'login');
            } else {
                response($signup, 'signup');
            }
        } else {
            $arr = array(
                'password' => $signup['password'],
                'status' => $signup['status']
            );
            $this->update($signup['id'], $arr);
            response($signup, 'login');
        }
    }
}
