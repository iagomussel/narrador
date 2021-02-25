<?php
	$user = isset($_GET['nome'])?$_GET['nome']:"volte";
$data = file_get_contents("usuarios/".$user);
$data = explode(";",$data);


	?>
u = {
nome:			"<?php echo $data[0];?>",
personagem:		"<?php echo $data[1];?>",
vida:			"<?php echo $data[2];?>",
poder:			"<?php echo $data[3];?>",
exp:			<?php echo $data[4];?>,
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