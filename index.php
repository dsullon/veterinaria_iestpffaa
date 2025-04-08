<?php
    $servicios = array(
        array(
            "nombre" => "Consulta",
            "imagen" => 'assets/img/consulta.jpg',
            "descripcion" => 'Cuidamos la salud de tu mascota con amor y atención profesional en cada diagnóstico.'
        ),
        [
            "nombre" => "Vacunación",
            "imagen" => 'assets/img/vacunacion.jpg',
            "descripcion" => 'Protegemos a tu compañero con vacunas y desparasitación, brindándole bienestar y una vida saludable.'
        ],
        array(
            "nombre" => "Baño y peluqueria",
            "imagen" => 'assets/img/peluqueria.jpg',
            "descripcion" => 'Embellecemos a tu mascota con cariño, asegurando higiene, frescura y un look adorable.'
        )
    );
?>
<?php include_once 'templates/_header.php' ?>
<main class="contenedor">
    <section class="servicios">
        <h2>Nuestros Servicios</h2>
        <p>
            Porque su bienestar es nuestra prioridad, ofrecemos un trato cálido y profesional, asegurando que cada visita sea una experiencia segura y reconfortante. ¡Tu mejor amigo merece lo mejor!
        </p>
        <div class="servicios__contenido">
            <?php
                foreach($servicios as $servicio):
            ?>
                    <div class="servicio">
                        <div class="servicio__img">
                            <img src="<?php echo $servicio['imagen'] ?>" 
                                alt="<?php $servicio['nombre'] ?>">
                        </div>
                        <div class="servicio__info">
                            <h3><?php echo $servicio['nombre'] ?></h3>
                            <p>
                                <?php echo $servicio['descripcion'] ?>
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
        