<?php
	$user = isset($_GET['nome'])?$_GET['nome']:"volte";
$data = file_get_contents("usuarios/".$user);
$data = explode(";",$data);


	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>usuarios
</title>
<style>
#ficha{
	width:405px;
	position:fixed;
}
#ficha{
	top:15px;
	left:5px;
}

#chat {
	position:fixed;
	text-align: right;
	border: 1px solid rgba(51,0,153,1);
	height:600px;
	top:5px;
	right:5px;
	width:400px;
	overflow-Y:scroll;
	overflow:hidden;
}
#txtchat,#addinv,#addabi
{
	background-color: rgba(102,255,255,0.3);
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	position: fixed;
	font-size: 14px;
	color: rgba(255,255,255,1);
	padding: 3px;
}
#txtchat{
	right: 5px;
	bottom: 15px;
}
#inventario,#habilidades{
		position:fixed;
		border:rgba(204,204,255,1) 1px solid;
		width:350px;
		height:200px;
		overflow-Y:scroll;
		
}
.item {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	color: rgba(254,255,255,1);
	background-color: none;
	text-align: center;
	vertical-align: middle;
	margin: 2px;
	padding: 2px;
	border-radius: 3px;
	border: thin solid rgba(204,255,204,1);
	-webkit-transition: all 50ms linear;
	-moz-transition: all 50ms linear;
	-ms-transition: all 50ms linear;
	-o-transition: all 50ms linear;
	transition: all 50ms linear;
}
.item:hover {
	background-color:rgba(100,110,110,1);
}
body {
	background-attachment: fixed;
	background-color:rgba(0,0,0,1);
	background-image: url(img/bg.jpg);	
	background-repeat: no-repeat;
	background-position: center center;
	background-size: 100% 100%;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-weight: bold;
	color: rgba(204,255,255,1);
}
td:hover
{
	background-color: rgba(0,0,0,1);
	outline: rgba(204,255,255,1) solid thin;
	-webkit-transition: all 50ms;
	-moz-transition: all 50ms;
	-ms-transition: all 50ms;
	-o-transition: all 50ms;
	transition: all 50ms;
}
.time{
	display:none;
}
#inventario{
	
bottom:60px;
left:25px;
}
#addinv{
	bottom:25px;
	left:25px;
}
#habilidades{
	top:15px;
	left:500px;
}
#addabi{
	left:500px;
	top:225px;
}
.jogador_chat
{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-style: normal;
	color: rgba(0,0,0,1);
	background-color: rgba(204,204,255,0.3);
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: dotted;
	border-left-style: solid;
	border-top-color: rgba(51,0,51,1);
	border-right-color: rgba(51,0,51,1);
	border-bottom-color: rgba(0,0,0,1);
	border-left-color: rgba(0,0,0,1);
	text-align: right;
}
.narrador_chat{
	text-align: left;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: rgba(204,255,255,1);
	background-color: rgba(0,0,153,0.4);
	border-right-width: thin;
	border-bottom-width: thin;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: rgba(0,0,0,1);
	border-bottom-color: rgba(102,102,102,1);
	font-style: italic;
	border-left-color: rgba(204,255,255,1);
}
.deletar{
	float: right;
	border: rgba(204,255,255,1) solid 1px;
	font-size: 14px;
	background-color: rgba(51,0,0,1);
	text-align: center;
	color: rgba(204,255,255,1);
	margin-right: 5px;
	margin-left: 5px;
	padding-top: 0px;
	padding-right: 2px;
	padding-bottom: 2px;
	padding-left: 0px;
}
</style>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>

<script>
usuario = {
nome:			"<?php echo $data[0];?>",
personagem:		"<?php echo $data[1];?>",
vida:			"<?php echo $data[2];?>",
poder:			"<?php echo $data[3];?>",
exp:			"<?php echo $data[4];?>",
idade:			"<?php echo $data[5];?>",
especie:		"<?php echo $data[6];?>",
classe:			"<?php echo $data[7];?>",
elemento:		"<?php echo $data[8];?>",
carater:		"<?php echo $data[9];?>",
hatsu:			"<?php echo $data[10];?>",
sabedoria:		"<?php echo $data[11];?>",
conhecimento:	"<?php echo $data[12];?>",
forca:			"<?php echo $data[13];?>",
resistencia:	"<?php echo $data[14];?>",
agilidade:		"<?php echo $data[15];?>",
inventario:		[<?php echo $data[16];?>],
habilidades:	[<?php echo $data[17];?>],
nivel:			"<?php echo $data[18];?>",
au:				"<?php echo $data[19];?>",
bs:				"<?php echo $data[20];?>"
}
function update()
{
	$.ajax({
		url:"update.php?nome="+usuario.nome,
		}).done(function(retorno)
		{
			eval(retorno)
			usuario = u;
			$.ajax({
			url:"salvar.php?action=chat&data="+usuario.nome,
		
				}).done(function(re)
				{
					$("#chat").html(re);
				})
			
			view();
			
		})
		setTimeout(update,700)
}
function salva()
{
	u=usuario;
	data =u.nome+";"+u.personagem+";";
	data+=u.vida+";"+u.poder+";"+u.exp+";"+u.idade+";";
	data+=u.especie+";"+u.classe+";"+u.elemento+";"+u.carater+";";
	data+=u.hatsu+";"+u.sabedoria+";"+u.conhecimento+";"+u.forca+";";
	data+=u.resistencia+";"+u.agilidade+";";
	
	var n=0;
	for(x=0;x<u.inventario.length;x++)
	{
		if(u.inventario[x]===undefined) {n++;continue}
		data+=(x-n>0)?",":"";
		data+="\""+u.inventario[x]+"\""
	}
	data+=";";
	n=0;
	for(x=0;x<u.habilidades.length;x++)
	{
		if(u.habilidades[x]===undefined) {n++;continue}
		data+=(x-n>0)?",":"";
		data+="\""+u.habilidades[x]+"\""
	}
	data+=";";
	
	
	
	data+=u.nivel+";"+u.au+";"+u.bs+";";
	$.ajax({
		url:"salvar.php?action=ficha&data="+data,
		
		}).done(function(retorno)
		{
			update();
		})
	
	}
function chat()
{
	if($("#txtchat").val()=="") return false;
	data = usuario.nome+";";
	data +="<div class='jogador_chat'>"+$("#txtchat").val()+"</div>";
	$("#txtchat").val("").focus();
	$.ajax({
		url:"salvar.php?action=chat&data="+data,
		
		}).done(function(retorno)
		{
			$("#chat").html(retorno);
		})
}
$(document).ready(function(){
	update();
	
})
function add_item(a,b)
{
	a[a.length]=$("#"+b).val();
	$("#"+b).val("").focus();
	salva();
	view();
	return false;
}
function view()
{
	document.getElementById("nome").innerHTML=usuario.nome;
	document.getElementById("nivel").innerHTML=usuario.nivel;
	document.getElementById("personagem").innerHTML=usuario.personagem;
	document.getElementById("idade").innerHTML=usuario.idade;
	document.getElementById("especie").innerHTML=usuario.especie;
	document.getElementById("classe").innerHTML=usuario.classe;
	document.getElementById("elemento").innerHTML=usuario.elemento;
	document.getElementById("hatsu").innerHTML=usuario.hatsu;
	document.getElementById("carater").innerHTML=usuario.carater;
	document.getElementById("sabedoria").innerHTML=usuario.sabedoria;
	document.getElementById("conhecimento").innerHTML=usuario.conhecimento;
	document.getElementById("forca").innerHTML=usuario.forca;
	document.getElementById("resistencia").innerHTML=usuario.resistencia;
	document.getElementById("agilidade").innerHTML=usuario.agilidade;
	document.getElementById("vida").innerHTML=usuario.vida;
	document.getElementById("poder").innerHTML=usuario.poder;
	document.getElementById("au").innerHTML=usuario.au;
	document.getElementById("bs").innerHTML=usuario.bs;
	inventario = "<div style='padding:10px;font-size:16px;'>Inventario</div>";
	for (a in usuario.inventario){
		if(usuario.inventario[a]===undefined)continue;
	inventario+="<div class=\"item\">"+usuario.inventario[a];
	inventario+="<span onclick='delete usuario.inventario["+a+"];salva();view()' class='deletar'>x</span></div>";
	}
	document.getElementById("inventario").innerHTML=inventario;
	habilidades = "<div style=\"padding:10px;fonctsize:16px;\">Habilidades</div>";
	for (a in usuario.habilidades) {
		if(usuario.habilidades[a]===undefined)continue;
	habilidades+="<div class=\"item\">"+usuario.habilidades[a];
	habilidades+="<span onclick='delete usuario.habilidades["+a+"];salva();view()' class='deletar'>x</span></div>";
	}
	
	document.getElementById("habilidades").innerHTML=habilidades;
	
	
}
</script>
</head>

<body onselectstart="return false">

<div class="container">
  <div class="content">
    <div>
    
		<table width="405" border="0" id="ficha">
  <tr>
    <td height="29" colspan="4"><div align="center" id="nome"></div></td>
  </tr>
  <tr>
    <td width="140" >Nível</td>
    <td colspan="3"id="nivel"></td>
  </tr>
  <tr>
    <td>Nome</td>
    <td colspan="3" id="personagem"></td>
  </tr>
  <tr>
    <td>Idade</td>
    <td colspan="3"  id="idade">&nbsp;</td>
  </tr>
  <tr>
    <td>Espécie</td>
    <td colspan="3"  id="especie">&nbsp;</td>
  </tr>
  <tr>
    <td>Classe</td>
    <td colspan="3"  id="classe">&nbsp;</td>
  </tr>
  <tr>
    <td>Elemento</td>
    <td colspan="3"  id="elemento">&nbsp;</td>
  </tr>
  <tr>
    <td >Hatsu</td>
    <td colspan="3"  id="hatsu">&nbsp;</td>
  </tr>
  <tr>
    <td height="48" colspan="4"><p align="center" id="carater"></p></td>
  </tr>
  <tr>
    <td>Sabedoria</td>
    <td width="84" id="sabedoria">&nbsp;</td>
    <td width="92">Vida</td>
    <td width="61" id="vida">&nbsp;</td>
  </tr>
  <tr>
    <td>Conhecimento</td>
    <td id="conhecimento">&nbsp;</td>
    <td>Poder</td>
    <td id="poder">&nbsp;</td>
  </tr>
  <tr>
    <td>Força</td>
    <td id="forca">&nbsp;</td>
    <td>Ouro</td>
    <td id="au">&nbsp;</td>
  </tr>
  <tr>
    <td>Resistência</td>
    <td id="resistencia">&nbsp;</td>
    <td>Basiliscos</td>
    <td id="bs">&nbsp;</td>
  </tr>
  <tr>
    <td>Agilidade</td>
    <td id="agilidade">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr>

</table>
<div id="inventario">Inventario
</div>
<div>
    <form onsubmit="return add_item(usuario.inventario,'addinv')">
    	<input type="text" id="addinv" size="53" maxlength="255" />
      </form>
    </div>
<div id="habilidades">
    Habilidades
    </div>
    
    <div>
    	 <form onsubmit="return add_item(usuario.habilidades,'addabi')">
        
        <input type="text" id="addabi" size="53" maxlength="255" />
    </form>
    </div>
    <div id="chat"></div>
    <div>
    <form onsubmit="chat();return false">
    	<input type="text" id="txtchat" size="60" maxlength="255" />
    </form>
    </div>
    
    </div>
  <!-- end .container --></div>
</body>
</html>