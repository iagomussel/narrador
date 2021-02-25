<?php
	$acao = isset($_GET['action'])?$_GET['action']:"";
	if($acao=="chat"){
		$data = $_GET['data'];
		$data = explode(";",$data);
		$file = fopen("usuarios/".$data[0]."_chat","a");
		if(isset($data[1]))
		fwrite($file,$data[1]);
		fclose($file);
		include("usuarios/".$data[0]."_chat");
		
	}
	if($acao=="ficha"){
		$data = $_GET['data'];
		$data = explode(";",$data);
		$file = fopen("usuarios/".$data[0],"w");
		$data = implode(";",$data);
		fwrite($file,$data);
		fclose($file);
	}
	
	?>