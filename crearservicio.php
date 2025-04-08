<?php
    require_once 'class/Servicio.php';
    include_once 'templates/_header.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $servicio = new Servicio($_POST);
        echo '<pre>';
        print_r($servicio);
        echo '</pre>';
    }
?>

<main class="contenedor">
    <h1>Nuevo servicio</h1>
    <form class="formulario" method="post">
        <div class="control">
            <label for="nombre">Nombre:</label>
            <input 
                type="text" 
                name="nombre" 
                id="nombre" 
                autocomplete="off"
                placeholder="Ingrese el nombre"
            >
        </div>
        <div class="control">
            <label for="descripcion">Descripcion:</label>
            <textarea 
                name="descripcion" 
                id="descripcion"
                placeholder="Ingrese la descripción"
                ></textarea>
        </div>
        <div class="control">
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen">
        </div>
        <input type="submit" value="Registrar">
    </form>
</main>

<?php
    include_once 'templates/_footer.php';
?>