
           
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual Urbano</title>
    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: #fd9f9f;
        }

        header {
            background-color: #623b3bee;
            color: whitesmoke;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #b4a1a1;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        main {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .bienvenida {
            background-color: whitesmoke;
            padding: 40px;
            text-align: center;
            border-radius: 10px;
            color: red;
        }

        .boton {
            display: inline-block;
            background-color: #b4a1a1;
            color: whitesmoke;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            text-align: center;
            background-color: #b4a1a1;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tienda Virtual</h1>
        <p>Tienda en linea para que compres todos tus productos</p>
    </header>
    <nav>  
        <a href="#">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="#">Categoria</a>
         <a href="#">Contacto</a>
    </nav>
    <main>
        <section class="bienvenida">
            <h2>Bienvenido a nuestra tienda virtual</h2>
            <p> Encuentra los mejores productos
                en un solo lugar
            </p>
            <a href="/productos" class ="boton">Ver Productos</a>


        </section>
    </main>
    <footer>
        <p> 2026 Tienda Virtual - Todos los derechos reservados</p>
    </footer>
    
</body>
</html>