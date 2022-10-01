<?php


$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];

$nombre= "imagen";

class subirFoto {
    public $target_file;
    
    public function subeImagen($nombre, $foto)
    {
        $target_dir = "img/";
        $target_file = $target_dir . $nombre . '.jpg';
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($foto["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($foto["size"] <= 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($foto["tmp_name"], $target_file)) {
                echo "The file ". basename( $foto["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}

//$subir =new subirFoto();
//$img = subirFoto::target_file();

$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia_prueba_1";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consulta = "INSERT INTO noticias(titulo, noticia, categoria, foto, autor) 
            VALUES('$titulo','$noticia','$categoria','$target_file','$autor')";


if (mysqli_query($conexion, $consulta)) {
    echo "registro ingresado";
}else{
    echo "error al ingresar";
}



?>
