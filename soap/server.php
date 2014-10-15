<?php
	//call library
	require_once('nusoap/lib/nusoap.php');
	require_once('adodb/adodb/adodb.inc.php');
	$server = new nusoap_server;
	$server->configureWSDL('server', 'urn:server');
	$server->wsdl->schemaTargetNamespace = 'urn:server';
	
	//register a function tha work on server
	$server->register('login_ws',array('username'=>'xsd:string',
	'password'=>'xsd:string'),//parameters
	array('return'=>'sxd:string'),//output
	'urn:server',//namespace
	'urn:server#loginServer',//soapaction
	'rpc',//style
	'encode',//use
	'login');//description
	
	//create function
	function login_ws($username, $password){
		//enkripsi password dengan md5
		$password = md5($password);
		//buat koneksi
		$db = NewADOConnection('mysql');
		$db->Connect('localhost','root','','mahasiswa');
		//cek username dan password dari database
		$sql = $db->Execute("SELECT * FROM user where username='$username' AND password='$password'");
		
		//cek adanya username dan password di database
		if ((count ($sql->fields)> 0))// sama dengan mysql_num_rows pada php biasa
			{ return "Login berhasil";
			} else {
			return "Login gagal";
			}
		}
		
		//create HTTP Listener
		$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
		$server->service($HTTP_RAW_POST_DATA);
		
?>