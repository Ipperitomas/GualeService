<?php

require_once('/wamp/www/Gualeservice/base/Datosconexion.php');


$sql = "SELECT * FROM emprendimientos";
$resultado = mysqli_query($Conexion, $sql);

// while ($fila = $resultado->fetch_row()) {
//     var_dump($fila);
//  }



?>

<link href="../css/styles.css" rel="stylesheet" />
<section class="page-section" id="services">
    <div class="container">
        <h2 class="text-center mt-0">Emprendimientos</h2>
        <hr class="divider my-4" />
    </div>
</section>
<section id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
          <?php while ($fila = $resultado->fetch_row()) {?>
            <div class="col-lg-4 col-sm-6" onclick="VerEmprendimiento(<?php echo $fila[0] ?>);" style="margin-left: 0px;margin-bottom: 15px;">
                <a class="portfolio-box">
                    <img class="img-fluid" src="../assets/img/portfolio/fullsize/Barberia.jpg" alt="" />
                    <div class="portfolio-box-caption">
                       <form id="frmocr">
                           <div class="project-category text-white-50"><?php echo $fila[2]; ?></div>
                       </form> <input id="emprendimientoid" style="visibility: hidden;" value="<?php echo $fila[0] ?>">
                        <div class="project-name"><?php echo $fila[1] ?></div>
                    </div></a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<script src="../js/jquery.fmdFormSend.js"></script>
<script type="text/javascript">
 function VerEmprendimiento(id){
    //id = document.getElementById("emprendimientoid").value;
    $("#frmocr").fmdFormSend({
                            url: '../ajax',
                            extraData: {
                                archivo: 'Emprendimiento.php',
                                emprendimiento_id:id
                            },
                            onStart: function(){
                                //rulo.Show();
                            },
                            onFinish: function(a,b,c,d){
                                //rulo.Hide();
                               
                                console.log(c);
                                window.location.href = '../ajax/Emprendimiento.php';
                                
                                //document.getElementById("Documento_editable").innerText = c; 
                                
                            }
        });












//     console.log(id);
//     var parametros = {
//         "emprendimiento_id":id
//     };
//    // console.log(parametros);
//     $.ajax({
//       data : parametros,
//       url : '../ajax/Emprendimiento.php',
//       beforeSend: function(){
//         console.log("beforesend");
//     },
//     success: function(response){
//         console.log(response);
//         //window.location.href ='../ajax/Emprendimiento.php';
//       }
//     });

}



</script>























<!-- 


                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="../assets/img/portfolio/fullsize/Tiendaderopa.jpg"
                                ><img class="img-fluid" src="../assets/img/portfolio/thumbnails/Tiendaderopa.jpg" alt="" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Categoria:Tiendas</div>
                                    <div class="project-name">Tienda Franchesco</div>
                                </div></a
                            >
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="../assets/img/portfolio/fullsize/Barberia.jpg"
                                ><img class="img-fluid" src="../assets/img/portfolio/thumbnails/Barberia.jpg" alt="Entra a ver el servicio" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Categorias:Barberias/Peluquerias</div>
                                    <div class="project-name">Peluqueria MN</div>
                                </div></a
                            >
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="../assets/img/portfolio/fullsize/Carpinteria.jpg"
                                ><img class="img-fluid" src="../assets/img/portfolio/thumbnails/Carpinteria.jpg" alt="" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Categoria:Carpinteros</div>
                                    <div class="project-name">Carpinteria Ipperi Americo</div>
                                </div></a
                            >
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="../ajax/Emprendimiento.php"
                                ><img class="img-fluid" src="../assets/img/portfolio/thumbnails/programdores2.jpg" alt="Presiona" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Categoria:Programadores</div>
                                    <div class="project-name">Tipp Sistemas</div>
                                </div></a
                            >
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="../Views/Formulario.html"
                                ><img class="img-fluid" src="../assets/img/portfolio/thumbnails/programadores3.jpg" alt="" />
                                <div class="portfolio-box-caption p-3">
                                    <div class="project-category text-white-50">Categoria:Programadores</div>
                                    <div class="project-name">Rebrit Sistemas</div>
                                </div></a
                            >
                        </div> -->