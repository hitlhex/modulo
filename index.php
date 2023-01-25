<?php

    require "page/header.php";
    require "page/menu.php";

        if($_GET["pagina"]=="formulario"){
            require "page/formulario.php";
        }else if ($_GET["pagina"]=="cuerpo"){
            require "page/cuerpo.php";
        }else{
            require "page/cuerpo.php";
        }

    require "page/footer.php";