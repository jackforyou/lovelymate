<?php

class manageFirstViewController  {

	function show($f3,$params){
		$f3->set('name', $params['name']);
        $f3->set('content','..\app\views\viewx.htm');
        echo View::instance()->render('layout.htm');
    }
}

