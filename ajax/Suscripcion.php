<form id="frmocr" name="frmocr">
<?php
require_once('/wamp/www/Gualeservice/base/Conexion.php');
$post = array();
$post = (array) $_POST;


header('Location:Emprendimiento.php');

$nombre = $post['nombre'];
$apellido = $post['apellido'];
$Nombre_Emprendimiento = $post['nombre_emprendimiento'];
$categoria = $post['categoria'];
$direccion_local = $post['direccion'];
$ciudad = $post['Ciudad'];
$provincia = $post['Provincia'];
$Instragram = $post['link_ig'];
$Facebook = $post['link_fb'];
$usuario_id = 1;

if(empty($nombre)){
    return;

}
if(empty($apellido)){
    return;
}

if(empty($Nombre_Emprendimiento)){
    return;
}

if(empty($direccion_local)){
    return;
}

if(empty($usuario_id)){
    return;
}

// $reg =array(
// "direccion"=>$direccion_local,
// "Ciudad"=>$ciudad,
// "Provincia"=>$provincia,
// "Instagram"=>$Instragram,
// "Facebook"=>$Facebook,
// "Logo"=>$imagen_logo
// );
// print_r($reg);
// $dataemprendimiento = json_encode($reg);


try {
$sql ="INSERT INTO emprendimientos(nombre_emprendimiento,categoria_id,direccion,ciudad,provincia,instagram,facebook,usuario_id)";
$sql .= "VALUES ('$Nombre_Emprendimiento','$categoria','$direccion_local','$ciudad','$provincia','$Instragram','$Facebook','$usuario_id')";
    $base->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
    $base->exec($sql);
 
} catch (PDOException $e) {
    echo $sql." - ".$e->getMessage();
}
$base = null;


?>

</form>
<script src="../js/jquery.fmdFormSend.js"></script>
<script>
   
        $("#frmocr").fmdFormSend({
                            url: 'ajax',
                            extraData: {
                                archivo: 'Emprendimiento.php',
                                emprendimiento_id:"<?php echo $usuario_id; ?>"
                            },
                            onStart: function(){
                                //rulo.Show();
                            },
                            onFinish: function(a,b,c,d){
                                //rulo.Hide();
                               
                                console.log(c);
                                window.location.href = "Emprendimiento.php";
                               
                                
                            }
        });


    

</script>