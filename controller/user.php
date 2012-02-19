<?php
class Action extends SiteAction
{
    function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $info = _POST('user_info', array());
            if($user = _model('user')->read(array('username'=>$info['name'],'password'=>$info['password']))){
                $_SESSION['user'] = $user['username'];
                $this->redirect('index');
            }else {
                $this->display("login.html", array("error"=>"<span class='fl' style='color:red'>用户名或密码错误</span>"));
                die;
            }
        }
        $this->display("login.html");
    }

    function logout() {
        $_SESSION = array();
        $this->redirect('index');
    }
}