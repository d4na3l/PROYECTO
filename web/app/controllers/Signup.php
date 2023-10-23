<?php

class Signup extends Controller
{
    use user;
    public function index()
    {
        if (isset($_SESSION['session'])) {
            location('dashboard');
        }
        $this->view('signup');
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
