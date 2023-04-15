<?php
	
	$ci= $_POST["ci"];
	$ci= $_POST["nombre"];
	$ci= $_POST["celular"];
	$ci= $_POST["correo "];
	$doc= new DOMdocument('1.0');
	$doc->formatOutput=true;

	$raiz=$doc->createElement("usuario");
	$raiz=$doc->appendChild($raiz);
	
	$alum=$doc->createElement("alumno");
	$alum=$raiz->appendChild($alum);

	$ci=$doc->createElement("ci");
	$ci=$alum->appendChild($ci);
	$ci=$_POST['ci'];

	$ci=$doc->createElement("ci");
	$ci=$alum->appendChild($ci);


	$nom=$doc->createElement("nombre");
	$nom=$alum->appendChild($nom);
	$nombre=$_POST['nombre'];


 		
	$celu=$doc->createElement('celular');
	$celu=$alum->appendChild($celu);
	$celular=$_POST['celular'];


	$corre=$doc->createElement('correo');
	$corre=$alum->appendChild($corre);
	$corre=$_POST['corre'];


	

	echo"...creado".$doc->save("usuario.xml")."bytes";

?>