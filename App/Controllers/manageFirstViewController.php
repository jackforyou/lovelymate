<?php
namespace App\Controllers;
class manageFirstViewController {

	function show(){
        $f3->set('content','..\app\views\viewx.htm');
        echo View::instance()->render('layout.htm');
    }
}

