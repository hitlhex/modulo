
<?php
    $nombre=$_POST['Nombre'];
    $usuario=$_POST['Apellido'];
    $password=$_POST ['Password']; 
         
    
    //Comprueba que el botón bguars haya sido presionado
if (isset($_POST['bguars'])) {

    /*Estaría definido de la siguiente manera
     * [0][dato1] 
     * [1][dato2] 
     * etc.....    */
    //Instancia del array
    $datos_formulario = array(  //<<--apertura
     //Recojo los datos del formulario y los guardo en el array 
     0 => $_REQUEST['dato1'],//input dato1 del formulario
     1 => $_REQUEST['dato2'],
     2 => $_REQUEST['dato3'],
     3 => $_REQUEST['dato4']
            
    );//cierre
    
    // Resultado del correcto almacenamiento
    echo 'Guardado';

    //Impresión de los datos almacenados en el array
    foreach ($datos_formulario as $index => $valor) {
        echo "[key_$index : $valor] , ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <?php 
        echo "Bienvenido, " . "<b>$usuario</b> disfrute de su estadia.";
        ?>
    </div>
    <h1>Perra</h1>
  <div class="container">
		<div id="galeri">
			    <figure><img src="http://www.egonomik.com/  wallpaper/doga/egonomik.com-doga-wallpaper-06.jpg" alt="" width="220"></figure>
                <figure><img src="https://www.doga.com.tr/genelpanel/images/crop/images_18-05-2012-17_18_43.jpg" alt="" width="220"></figure>
                <figure><img src="http://www.cetsohbet.com/resimler/resim/doga-resimleri2.jpg" alt="" width="220"></figure>
                <figure><img src="http://www.kazanmakisteyenler.com/wp-content/uploads/2010/01/Amasya-doga-manzarasi.jpg" alt="" width="220"></figure>
                <figure><img src="http://www.kalbimcity.net/wp-content/uploads/2008/10/doga7.jpg" alt="" width="220"></figure>
                <figure><img src="http://www.resimler.eu/wp-content/gallery/doga-resimleri-1/doga-resmi-5.jpg" alt="" width="220"></figure>
                <figure><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTd7N-8f1D6eotfI4eRWETqmZcdv_3LT9AdvfW1xJeAryVCgFfRtw" alt="" width="220"></figure>
                <figure><img src="http://www.pdrmerkezi.com/wp-content/uploads/2012/04/5.jpg" alt="" width="220"></figure>
                <figure><img src="http://www.kozakli.tv/resim/doga-manzara-fotograflari-1-1506c594ec49a1.jpgf914d327a52f2a3365cb41f792537949.jpg" alt="" width="220"></figure>
		</div>
	</div>
    <p>Ingrese 4 números para almacenar</p>
        <form method="post" action="datos.php">
            <input type="number" name="dato1"/><br>
            <input type="number" name="dato2"/><br>
            <input type="number" name="dato3"/><br>
            <input type="number" name="dato4"/><br>
            <input type="submit" name="bguars" value="Guardar">
        </form>
</body>
</html>