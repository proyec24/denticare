<?php
  include 'denticonfig.php';
  $name = filter_input(INPUT_POST, "nombre");
  $lastname = filter_input(INPUT_POST, "apellido");
  $birthday = filter_input(INPUT_POST, "nacimiento");
  $gender = filter_input(INPUT_POST, "sexo");
  $phone = filter_input(INPUT_POST, "telefono");
  $address = filter_input(INPUT_POST, "direccion");
  $query2 = "SELECT ID_PAC FROM paciente WHERE NOMBRE_P LIKE '".$nombre."'";
  $result2 = mysqli_query($conn, $query2);
  $query = "UPDATE PACIENTE SET NOMBRE_P='".$name."',APELLIDO_P='".$lastname."',SEXO='".$gender."',TELEFONO='".$phone."',DOMICILIO='".$address."',FECHA_NAC='".$birthday."'WHERE ID_PAC='".$result2."'";
  $result = mysqli_query($conn, $query);
  $lastId = mysqli_insert_id($conn);
  $row = mysqli_fetch_array($result2);
  if($row){
    echo '1';
  }
  mysqli_close($conn);
?>