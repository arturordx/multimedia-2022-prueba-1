<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    <style>
        body {
            background: #dae7f0;
            margin-top: 0%;
        }
        
        #header {
            height: 200px;
            width: 100%;
            background: #2c558d;
            border-top: 0px solid #333;
            border-left: 0px solid #333;
            border-bottom: 01px solid #333;
            border-right: 0px solid #333;
        }
        
        #menu {
            height: 60px;
            width: 100%;
            background:#ccc;
            border-top: 0px solid #333;
            border-left: 0px solid #333;
            border-bottom: 00px solid #333;
            border-right: 0px solid #333;
        }
        
        #main {
            height: 1500px;
            width: 100%;
            background: #fff;
            border-top: 0px solid #333;
            border-left: 0px solid #333;
            border-bottom: 0px solid #333;
            border-right: 0px solid #333;
        }
        
        #footer {
            height: 200px;
            width: 100%;
            background: #072652;
            border-top: 0px solid #333;
            border-left: 0px solid #333;
            border-bottom: 0px solid #333;
            border-right: 0px solid #333;
        }

        #recuadro
            {
            height: 300px;
            width: 100%;
            background: #fff;
            float:left;
            }
        
        </style>
        </head>

<body>
<div id="header"></div>
<div id="menu">
<?php include "menu.php"; ?>
</div>
<div id="main">
    <div id="recuadro">
    
    <form action="insert.php" method="post">
    <table> 
    <tr>
        <td>Titulo</td>
        <td><input type="text" name="titulo" id="titulo" size="100"></td>
    </tr>
    
    <tr>
        <td>Noticia</td>
        <td><textarea name="noticia" id="noticia" cols="100" rows="10"></textarea></td>
    </tr>

    <tr>
        <td>Categoria</td>
        <td><input type="text" name="categoria" id="categoria" size="100"></td>
    </tr>

    <tr>
        <td>Autor</td>
        <td><input type="text" name="autor" id="autor" size="100"></td>
    </tr>

    </table>
    
    <label for="foto">Imagen       </label>
    <input type="file" id="foto" name="foto"><br>
    (PD:no me funciona el guardar la imagen, no pude hacerlo funcinar, pero si guarda todo lo otro)
    <br><br>
    <input type="submit" value="Enviar">

    </form>

    
    </div>



</div>
<div id="footer"></div>


</html>