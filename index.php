<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:p</title>
    <link rel="stylesheet" href="index.css">
</head>
<body class="puta">
    <nav class="cabeza">
        <div class="encabezado">
            <div>
                <a href="https://music.youtube.com/watch?v=ChMI1FnScyQ&feature=share">Inicio</a>
             </div>
             <div>
                <a href="https://music.youtube.com/watch?v=B4xXhUONS9M&feature=share">Blog</a>
             </div>
             <div>
                <a href="https://music.youtube.com/watch?v=6AzAEG_Ty_E&feature=share">Noticias</a>
             </div>     
        </div>
    </nav>
    <main>
    </main> 
    <form action="tarjeta.php" method="post" class="form">
        <h2 class="form__title">Iniciar Sesión</h2>
        <p class="form__paragraph">¿Aún no consigues una cuenta?<a href="#" class="form__link"> Entra aqui</a></p>
        <div class="form__container">
            <div class="form__group">
                <input type="text" id="name" name="Nombre" class="form__input" placeholder="">
                <label for="name" class="form__label">Nombre:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="password" name="Apellido" class="form__input" placeholder="">
                <label for="user" class="form__label">Usuario:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="password" name="Password" class="form__input" placeholder="">
                <label for="password" class="form__label">Contraseña:</label>
                <span class="form__line"></span>
            </div>
            <input type="submit" class="form__submit" value="Entrar">
        </div>   
    </form>
</body>
</html>