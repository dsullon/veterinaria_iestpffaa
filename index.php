<?php
    require_once 'includes/database.php';
    require_once 'class/Servicio.php';
    $servicio = new Servicio();
    $servicio->setDB($db);
    $servicios = $servicio->all();


    $servicioA = $servicio->find(3);

    $servicioNuevo = new Servicio([
        "nombre" => "Guardería",
        "descripcion" => "Servicio de guardería de mascotas"
    ]);
    $servicioNuevo->setDB($db);
    $servicioNuevo->save();
    echo "<pre>";
    var_dump($servicioNuevo);
    echo "</pre>";
?>
<?php include_once 'templates/_header.php' ?>
<main class="contenedor">
    <section class="servicios">
        <h2>Nuestros Servicios</h2>
        <p>
            Porque su bienestar es nuestra prioridad, ofrecemos un trato cálido y profesional, asegurando que cada visita sea una experiencia segura y reconfortante. ¡Tu mejor amigo merece lo mejor!
        </p>
        <a href="crearservicio.php">Nuevo Servicio</a>
        <div class="servicios__contenido">
            <?php
                foreach($servicios as $servicio):
            ?>
                    <div class="servicio">
                        <div class="servicio__img">
                            <img src="<?php echo $servicio->imagen ?>" 
                                alt="<?php $servicio->nombre ?>">
                        </div>
                        <div class="servicio__info">
                            <h3><?php echo $servicio->nombre ?></h3>
                            <p>
                                <?php echo $servicio->descripcion ?>
                            </p>
                        </div>
                    </div><!--Fin de servicio-->                         
            <?php
                endforeach;
            ?>
        </div>
    </section>
</main>
<?php include_once 'templates/_footer.php'?>
        