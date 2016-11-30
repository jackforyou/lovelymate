<?php
// Kickstart the framework
ob_start();
$f3=require('lib/base.php');

$f3->config('setup.cfg');
$f3->set('AUTOLOAD', 'app/controllers');
$db=new DB\SQL(
            'mysql:host=localhost;port=3306;dbname=lovely_mate',
            'root',
            ''
        );
$f3->set('UPLOADS','uploads/');
$web = Web::instance();
$f3->route('GET /',
    function($f3) {
       $f3->set('content', '..\dependency\main-page.htm');
       $f3->set('sendform', '\sendform');
       echo \Template::instance()->render('..\dependency\index.htm');
    }
);

$f3->route('GET /form',
    function($f3) {
    	$f3->set('content', '..\dependency\form-submit.htm');
        echo \Template::instance()->render('..\dependency\index.htm');
    }
);
$f3->route('GET /add-activity',
    function($f3) {
        $f3->set('content', '\dependency\add-activity.htm');
        echo View::instance()->render('\dependency\vue.html');
    }
);
$f3->route('POST /update-activities [ajax]',
    function($f3) use($db){
      $getData = $f3->get('POST.data');
      $user = new DB\SQL\Mapper($db,'member');
      $frequentUsers = $user->load(array('Username=?','anny'),array('order'=>'ID'));
      $user->activities = json_encode($getData);
      $user->save();
      echo "OK";
    }
);
$f3->route('GET|POST|PUT /upload-data',
    function($f3) use($db,$web) {
        $user = new DB\SQL\Mapper($db,'member');
        $frequentUsers = $user->find(array('Username=?','anny'),array('order'=>'ID'));
        foreach ($frequentUsers as $obj)
        {
           if ($obj->Nickname != $f3->get('POST.nickname'))
           {
                echo "OK";
           }else{
                echo "Duplicate Username";
                $f3->reroute('/form');
           }
        }
        // $user->Nickname = $f3->get('POST.nickname');
        // $user->Age = $f3->get('POST.age');
        // $user->Province = $f3->get('POST.province');
        // $user->Career = $f3->get('POST.career');
        // $user->Shape = $f3->get('POST.shape');
        // $f3->set('UPLOADS','uploads/'.$f3->get('POST.nickname').'/');
        // $web = $web->receive(NULL,true,true);
        // $name = array_keys($web);
        // print_r($name);
        // $user->Image = $name[0];
        // $user->save();
    }
);

$f3->route('GET /post-information',
    function($f3) {
    	$f3->set('content', '\dependency\upload-image.htm');
        echo View::instance()->render('\dependency\index.htm');
    }
);


$f3->route('GET /add/@name', 'manageFirstViewController->show');
$f3->route('GET /about',
    function() {
        echo 'About me';
    }
);
$f3->route('GET /brew/@count',
    function($f3,$params) {
        echo $params['count'].' bottles of beer on the wall.';
    }
);
$f3->route('GET /brew/*',
    function() {
        echo 'Enough beer! We always end up here.';
    }
);


$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

// $f3->route('GET /',
// 	function($f3) {
// 		$classes=array(
// 			'Base'=>
// 				array(
// 					'hash',
// 					'json',
// 					'session'
// 				),
// 			'Cache'=>
// 				array(
// 					'apc',
// 					'memcache',
// 					'wincache',
// 					'xcache'
// 				),
// 			'DB\SQL'=>
// 				array(
// 					'pdo',
// 					'pdo_dblib',
// 					'pdo_mssql',
// 					'pdo_mysql',
// 					'pdo_odbc',
// 					'pdo_pgsql',
// 					'pdo_sqlite',
// 					'pdo_sqlsrv'
// 				),
// 			'DB\Jig'=>
// 				array('json'),
// 			'DB\Mongo'=>
// 				array(
// 					'json',
// 					'mongo'
// 				),
// 			'Auth'=>
// 				array('ldap','pdo'),
// 			'Bcrypt'=>
// 				array(
// 					'mcrypt',
// 					'openssl'
// 				),
// 			'Image'=>
// 				array('gd'),
// 			'Lexicon'=>
// 				array('iconv'),
// 			'SMTP'=>
// 				array('openssl'),
// 			'Web'=>
// 				array('curl','openssl','simplexml'),
// 			'Web\Geo'=>
// 				array('geoip','json'),
// 			'Web\OpenID'=>
// 				array('json','simplexml'),
// 			'Web\Pingback'=>
// 				array('dom','xmlrpc')
// 		);
// 		$f3->set('classes',$classes);
// 		$f3->set('content','welcome.htm');
// 		echo View::instance()->render('layout.htm');
// 	}
// );

$f3->route('GET /userref',
	function($f3) {
		$f3->set('content','userref.htm');
		echo View::instance()->render('layout.htm');
	}
);
$f3->run();