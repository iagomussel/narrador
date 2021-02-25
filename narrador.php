<?php

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
input{
	
	background-color: rgba(102,255,255,0.3);
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	font-size: 14px;
	color: rgba(255,255,255,1);
	padding: 3px;
}
#txtchat,#addinv,#addabi,#exp_bar,#msg{
	position: fixed;
}
#msg{
width:10%;
left:45%;
background:rgba(0,24,4,1);
border:rgba(0,119,0,1) solid thin;
color:rgba(119,120,120,1);
display:none;

}
#exp_bar{
	background-color: rgba(21,0,0,.8);
	text-align: left;
	padding: 4px;
	border: thin double rgba(221,221,221,1);
	top:280px;
	left: 600px;
	color:	rgba(255,255,255,1);
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
	padding:4px;
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
.button{
	background-color: rgba(0,0,221,1);
	margin: 1px;
	padding: 3px;
	border: thin solid rgba(221,221,221,1);
	text-align: center;
	cursor: crosshair;
}
.button_pressed{
	background-color: rgba(0,0,1,1);
	margin: 1px;
	padding: 3px;
	border: thin solid rgba(221,221,221,1);
	text-align: center;
	cursor: crosshair;
}
.button:hover{
	background-color: rgba(0,110,221,1);
	margin: 1px;
	padding: 3px;
	border: thin solid rgba(221,221,221,1);
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
	padding:4px;
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
td input{
	width:99%;
	height:99%;
	padding:0;
	margin:0;
}
#usuario_lst{
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	text-align: center;
	width: 300px;
	border: thin solid #BBB;
	position: fixed;
	left:500px;
	bottom:25px;
}
</style>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>

<script>

usuario_selecionado = 0;
usuario = [];
nomes=[<?php include("jogadores.txt");?>]
function update()
{
	$.ajax({
		url:"update.php?nome="+nomes[usuario_selecionado],
		}).done(function(retorno)
		{
			eval(retorno);
			usuario[usuario_selecionado] = u;
			view();
		})
}
function update_chat()
{
					$.ajax({
						url:"salvar.php?action=chat&data="+nomes[usuario_selecionado]	
						}).done(function(retorno)
						{
							$("#chat").html(retorno);
						})
						
		setTimeout(update_chat,300);		
}
function mudar_usuario(a)
{
	d=document.getElementById("usuario_lst");
	usuario_selecionado=a;
	h="";
	for(b in nomes)
	{
		classe="button";
		if(a==b)classe="button_pressed";
		h+="<li class='"+classe+"' onclick='mudar_usuario("+b+")' >"+nomes[b]+"</li>";
		
	}
	d.innerHTML=h;
	update()
}
function salva()
{
	u=usuario[usuario_selecionado];
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
	data = nomes[usuario_selecionado]+";";
	data +="<div class='narrador_chat'>"+$("#txtchat").val()+"</div>"
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

	d=document.getElementById("usuario_lst");
	for(a in nomes)
	{
		classe="button";
		if(a==0)classe="button_pressed";
		d.innerHTML+="<li class='"+classe+"' onclick='mudar_usuario("+a+")' >"+nomes[a]+"</li>";
		
	}
	update_chat();
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
	u=usuario[usuario_selecionado];
	$("#nome").val(u.nome)
	$("#nivel").val(u.nivel)
	$("#personagem").val(u.personagem)
	$("#idade").val(u.idade)
	$("#especie").val(u.especie)
	$("#classe").val(u.classe)
	$("#elemento").val(u.elemento)
	$("#hatsu").val(u.hatsu)
	$("#carater").val(u.carater)
	$("#sabedoria").val(u.sabedoria)
	$("#conhecimento").val(u.conhecimento)
	$("#forca").val(u.forca)
	$("#resistencia").val(u.resistencia)
	$("#agilidade").val(u.agilidade)
	$("#vida").val(u.vida)
	$("#poder").val(u.poder)
	$("#au").val(u.au)
	$("#bs").val(u.bs)
	$("#exp").text(u.exp);
	inventario = "<div style='padding:10px;font-size:16px;'>Inventario</div>";
	for (a in u.inventario){
		if(u.inventario[a]===undefined)continue;
	inventario+="<div class=\"item\">"+u.inventario[a];
	inventario+="<span onclick='delete usuario[usuario_selecionado].inventario["+a+"];salva();view()' class='deletar'>x</span></div>";
	}
	document.getElementById("inventario").innerHTML=inventario;
	habilidades = "<div style=\"padding:10px;fonctsize:16px;\">Habilidades</div>";
	for (a in u.habilidades) {
		if(u.habilidades[a]===undefined)continue;
	habilidades+="<div class=\"item\">"+u.habilidades[a];
	habilidades+="<span onclick='delete usuario[usuario_selecionado].habilidades["+a+"];salva();view()' class='deletar'>x</span></div>";
	}
	
	document.getElementById("habilidades").innerHTML=habilidades;
}

function muda_ficha()
{
	u=usuario[usuario_selecionado];
	u.nome=$("#nome").val()
	u.nivel=$("#nivel").val()
	u.personagem=$("#personagem").val()
	u.idade=$("#idade").val()
	u.especie=$("#especie").val()
	u.classe=$("#classe").val()
	u.elemento=$("#elemento").val()
	u.hatsu=$("#hatsu").val()
	u.carater=$("#carater").val()
	u.sabedoria=$("#sabedoria").val()
	u.conhecimento=$("#conhecimento").val()
	u.forca=$("#forca").val()
	u.resistencia=$("#resistencia").val()
	u.agilidade=$("#agilidade").val()
	u.vida=$("#vida").val()
	u.poder=$("#poder").val()
	u.au=$("#au").val()
	u.bs=$("#bs").val()
	salva();
}

function addexp(){
	u=usuario[usuario_selecionado];
	if(!isNaN(parseInt($('#add_exp').val()))){
	u.exp =((isNaN(parseInt(u.exp)))?0:parseInt(u.exp))+parseInt($('#add_exp').val());
	salva()
	}
	$("#add_exp").val("").focus();
}
function message(a)
{
	$("#msg").html($("#msg").html()+"<br />"+a).show();
	setTimeout(function(){$("#msg").html("").hide()},3000);
}
</script>
</head>

<body onselectstart="return false">

<div class="container">
  <div class="content">
    <div>
    <form onsubmit="muda_ficha();return false">
	  <table width="405" border="0" id="ficha">
  <tr>
    <td height="29" colspan="4"><input type="text"   align="center" id="nome"/></td>
  </tr>
  <tr>
    <td width="140" >Nível</td>
    <td colspan="3"><input type="text"   align="center" id="nivel"/></td>
  </tr>
  <tr>
    <td>Nome</td>
    <td colspan="3"><input type="text"   id="personagem" align="center"  /></td>
  </tr>
  <tr>
    <td>Idade</td>
    <td colspan="3"  ><input type="text"  id="idade" align="center"  /></td>
  </tr>
  <tr>
    <td>Espécie</td>
    <td colspan="3"  ><input type="text" id="especie"  align="center"  /></td>
  </tr>
  <tr>
    <td>Classe</td>
    <td colspan="3" ><input type="text"  id="classe"  align="center"  /></td>
  </tr>
  <tr>
    <td>Elemento</td>
    <td colspan="3"  ><input type="text" id="elemento" align="center"  /></td>
  </tr>
  <tr>
    <td >Hatsu</td>
    <td colspan="3"  ><input type="text" id="hatsu" align="center"  /></td>
  </tr>
  <tr>
    <td colspan="4"><input type="text"  id="carater" align="center"  /></td>
  </tr>
  <tr>
    <td>Sabedoria</td>
    <td width="84" ><input type="text" id="sabedoria"  align="center"  /></td>
    <td width="92">Vida</td>
    <td width="61" ><input type="text" id="vida"  align="center"  /></td>
  </tr>
  <tr>
    <td>Conhecimento</td>
    <td><input type="text"  id="conhecimento"  align="center"  /></td>
    <td>Poder</td>
    <td ><input type="text" id="poder"  align="center"  /></td>
  </tr>
  <tr>
    <td>Força</td>
    <td><input type="text"  id="forca"  align="center"  /></td>
    <td>Ouro</td>
    <td><input type="text"  id="au"  align="center"  /></td>
  </tr>
  <tr>
    <td>Resistência</td>
    <td ><input type="text"  id="resistencia" align="center"  /></td>
    <td>Basiliscos</td>
    <td ><input type="text" id="bs"  align="center"  /></td>
  </tr>
  <tr>
    <td>Agilidade</td>
    <td ><input type="text"  id="agilidade"  align="center"  /></td>
    <td colspan="2"><input type="submit" value="salvar" /></td>
    </tr>
	
</table></form>
<div id="inventario">Inventario
</div>
<div>
    <form onsubmit="return add_item(usuario[usuario_selecionado].inventario,'addinv')">
    	<input type="text" id="addinv" size="53" maxlength="255" />
      </form>
    </div>
<div id="habilidades">
    Habilidades
    </div>
    
    <div>
    	 <form onsubmit="return add_item(usuario[usuario_selecionado].habilidades,'addabi')">
        
        <input type="text" id="addabi" size="53" maxlength="255" />
    </form>
    </div>
    <div id="chat"></div>
    <div>
    <form onsubmit="chat();return false">
    	<input type="text" id="txtchat" size="60" maxlength="255" />
    </form>
    </div>
    <div>
    <ul id="usuario_lst">
    </ul>
    </div>
    <div id="exp_bar">
  <div><span> exp:</span><span id="exp"></span></div>
    <form onsubmit="addexp();return false"><input type="text" id="add_exp" size="4" maxlength="6" /></form><div class="button">Subir Nivel</div></div>
    <div id="msg">mensagens</div>
    </div>
  <!-- end .container --></div>
</body>
</html>