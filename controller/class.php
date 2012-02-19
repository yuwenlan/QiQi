<?php
/**
 * 
 */
 class action extends SiteAction
 {	
 	function index()
 	{
 		$data = _model('class')->getList();
 		$this->display('class.html', array('data'=>$data));
 	}

 	public function add() {
 		if ( _model('class')->create(array('cname'=>$_POST['class'])) ) {
 			$this->redirect('class');
 		} else {
 			echo "员工添加错误";
 		}
 	}

 	public function delete($id) {
 		_model('class')->delete(array('id'=>$id));
 		$this->redirect('class');
 	}

 	public function edit($id = 0) {
 		if ( $_SERVER['REQUEST_METHOD'] === "GET" ) {
 			if ( !$data = _model('class')->read(array('cid'=>$id)) ) {
 				echo "无此班次";
 			}
 			$this->display("class_edit.html", array('data'=>$data));
 		} else {
 			_model('class')->update(array('cid'=>$_POST['cid']), array('cname'=>$_POST['class']));
 			$this->redirect('class');
 		}
 	}
} 
?>