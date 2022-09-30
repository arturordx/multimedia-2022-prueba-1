<?php


$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];

$foto = $_FILES['foto'];

$nombre_archivo = "imagen";

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($foto["tmp_name"]);

if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
} else {
    echo "File is not an image.";
}

move_uploaded_file($foto["tmp_name"], $target_file);
echo "Imagen " . $foto['name'];




$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia_prueba_1";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consulta = "INSERT INTO noticias(titulo, noticia, categoria, url_foto, autor) 
            VALUES('$titulo','$noticia','$categoria','$target_file','$autor')";


if (mysqli_query($conexion, $consulta)) {
    echo "registro ingresado";
}else{
    echo "error al ingresar";
}



?>