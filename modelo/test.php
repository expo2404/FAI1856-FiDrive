<?php
include_once '../configuracion.php';
$archivoce=new control_archivocargadoestado();
$id["idarchivocargadoestado"]=4;
$arreglo=$archivoce->buscar($id);
var_dump($arreglo[0]->getObjusuario()[0]->getUsnombre());


