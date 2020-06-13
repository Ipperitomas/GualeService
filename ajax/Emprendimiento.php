<?php
require_once('/wamp/www/Gualeservice/base/Datosconexion.php');




$sql = "SELECT * FROM emprendimientos ORDER BY id DESC LIMIT 1";

$datosemp = array();
$resultado = mysqli_query($Conexion, $sql);
$fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
//print_r($fila);
$instagram = $fila['instagram'];
//print_r($instagram);
$instagram .= 'embed';
$facebook = $fila['facebook'];



?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../css/Emprendimiento.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<a href="../Views/index"><div class="menu" style="color: black!important;"></div></a>

<br>


<hr>
<div class="container" style="margin-top: 40px; float:right">
    <div class="logo">
        <img src="../img1.png">
        <h1><?php echo $fila['nombre_emprendimiento']; ?></h1>
        <span>Categoria:<?php echo $fila['categoria_id']; ?></span>
    </div>
    <div class="descripcion" style="width: 70%;">
        <textarea name="EditarDescripcion" id="EditarDescripcion" style="visibility: hidden; width: 100%; height: 30%;">
            
        </textarea>
        <button class="btn btn-link" type="button" onclick="Editardescripcion();"> Editar descripcion</button>
        <p>
            <?php echo $fila['descripcion']; ?>
        </p>
    </div>
    <br>
    <div class="galeria">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>

    <div class="conocer" style="margin-top: 410px;">
        <h5 id="conocenos">Conocenos en:</h5>
        
            <div class="instagram">
               <img src="../assets/img/iglogo.png" id="logoig">

                <iframe src="<?php echo $instagram; ?>" width="330" height="550" frameborder="0" scrolling="no" allowtransparency="true"></iframe>

            </div>
                     <div class="facebook">
                     <img src="../assets/img/fblogo.png" id="logoig">
                    <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v7.0" nonce="0ghHT1Ud"></script>
                        <div class="fb-page" data-href="<?php echo $facebook; ?>" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="<?php echo $facebook; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $facebook; ?>">TIpp Sistemas Gualeguaychu</a></blockquote>
                        </div>
                    </div> 
            <div class="ubicacion">

            </div>
      
    </div>



</div>

<script>
    function Editardescripcion(){
        document.getElementById("EditarDescripcion").style.visibility = "visible";
    }
</script>



<script>
    $(document).ready(function() {
        $('.menu').load('../Views/plantilla.html');
    });
</script>