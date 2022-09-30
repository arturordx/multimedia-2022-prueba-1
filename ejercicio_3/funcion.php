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
<div id="menu"></div>
<div id="main">
    <div id="recuadro">
    <h3>Ingrese lo digitos de la ecuacion</h3>
    <form action="operacion.php" method="POST" enctype="multipart/form-data">
     
    
    <label>Y=</label>
    <input type="number" id="a" name="a" min="0" max="99" value="0">
    <label>x^2+</label>
    <input type="number" id="b" name="b" min="0" max="99" value="0">
    <label>x+</label>
    <input type="number"id="c" name="c" min="0" max="99" value="0">
    <input type="submit" value="Enviar">

    </form>







    </div>



</div>
<div id="footer"></div>
</body>

</html>