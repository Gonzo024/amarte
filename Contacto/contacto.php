<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="box-info">
            <h1>CONTÁCTATE CON NOSOTROS</h1>
            <div class="data">
                <p><i class="fa-solid fa-phone"></i> +57 3233243613</p>
                <p><i class="fa-solid fa-envelope"></i> aamarte51@gmail.com</p>
                <p><i class="fa-solid fa-location-dot"></i> </p>
            </div>
            <div class="links">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        
        <form action="../php/funcion_contacto.php" method="POST">
            <div class="input-box">
                <input type="text" name="nombre_apellido" id="name" class="name" placeholder="Nombre y apellido" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="correo" id="mail" class="mail" placeholder="Correo electrónico">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" name="asunto" id="subject" class="subject" placeholder="Asunto">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div class="input-box">
                <textarea name="comentario" class="message" id="message" class="message"  placeholder="Escribe tu mensaje... "></textarea>
            </div>
            <button type="submit">Enviar mensaje</button>
        </form>
    </div>


</body>
</html>

