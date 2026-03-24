<?php
function textbox(string $tipo,string $id,string $ejemplo,bool $requerido):void{

    $r= $requerido ? "required" : "";

 echo 
 "
  <input type='$tipo' class='form-control' id='$id' placeholder='$ejemplo' $r>
 ";
}
?>