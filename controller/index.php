<?php
class Action extends SiteAction
{
    function index()
    {
    	if (empty($_SESSION['user'])) {
    		$this->redirect('user');
    	}

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $db = $this->db;
            $db->query('TRUNCATE TABLE `qiqi_model`');
            foreach ($_POST['day'] as $key => $value) {
                _model('model')->create($value);
            }
            $this->redirect('/');
        }

        $class = _model('class')->getList();
    	$staff = _model('user')->getList("WHERE id > 1");
        $model = _model('model')->getList();
        $mo = array();
        foreach ($model as $key => $value) {
            $mo[$value['id']] = $value;
        }
        $this->display('default.html', array('staff'=>$staff, 'class'=>$class, 'model'=>$mo));
    }

    function getWeek($riqi) {
        date_default_timezone_set( date_default_timezone_get() );
        $date = array();
    	$year = date('Y');
        $month = date('m');
        $day = date('d');
        $week = date('w');
        $today = date('Y-m-d');
        if ($week != 0) {
            $j = 0;
            for ($i = 7; $i > 0 ; $i--) { 
                $date[$i] = strtotime("-" . $j . "day");
                ++$j;
            }
        }
        elseif ($week == 1) {
            $j = 7;
            for ($i=1; $i < 8; $i++) { 
                $date[$i] = strtotime($i-1 . "day");
            }
        }else {
            
        }
        
        foreach ($date as $key => $value) {
            echo date("Y-m-d", $value) . "<br>";
        }
        //$last_day = date( 'd', mktime(23, 59, 59, $month+1, 0,$year) );
        //echo date('Y-m-d');
    }
}

?>