<?php
/**
 * 
 */
 class action extends SiteAction
 {	
 	function index()
 	{
 		$data = _model('user')->getList('WHERE id > 1');
 		$this->display('staff.html', array('data'=>$data));
 	}

 	public function add() {
 		if ( _model('user')->create(array('username'=>$_POST['staff'])) ) {
 			$this->redirect('staff');
 		} else {
 			echo "员工添加错误";
 		}
 	}

 	public function delete($id) {
 		_model('user')->delete(array('id'=>$id));
 		$this->redirect('staff');
 	}

 	public function edit($id = 0) {
 		if ( $_SERVER['REQUEST_METHOD'] === "GET" ) {
 			if ( !$data = _model('user')->read(array('id'=>$id)) ) {
 				echo "无此用户";
 			}
 			$this->display("staff_edit.html", array('data'=>$data));
 		} else {
 			_model('user')->update(array('id'=>$_POST['sid']), array('username'=>$_POST['staff']));
 			$this->redirect('staff');
 		}
 	}
} 
?>