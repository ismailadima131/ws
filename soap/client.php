<?php
	//memulai session
	session_start();
	//panggil library
	require_once('nusoap/lib/nusoap.php');
	//mendefinisikan alamat url service yang disediakan oleh client 
	$client = new nusoap_client('http://localhost/soap/server.php?wsdl','WSDL');
	$username = "admin";
	$password = "admin";
	$result = $client->call('login_ws',array('username'=>$username,'password'=>$password));
	print_r ($client->response);
	if ($result == "Login Berhasil"){
		$_SESSION['username'] = $username;
		//header ("location:index.php");
	} else {
		//header ("location:login.php");
	}
	?>
?>