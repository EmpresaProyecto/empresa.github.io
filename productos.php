<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/diseño.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/Banner.css">
  <link rel="stylesheet" type="text/css" href="css/inicio.css">
  <link rel="stylesheet" type="text/css" href="css/redes.css">
  <link rel="stylesheet" type="text/css" href="css/CCVT.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilo.css">
    
    <script src="app.js" async></script>
    <title>productos </title>
    <style>
    #header3 {
      background-color: #;
      padding: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      width: 100%;
      top: 0;
      transition: top 0.3s;
    }
    #logo {
      width: 50px;
      height: auto;
    }
    .dropdown2 {
      position: relative;
    }
    .dropdown-content2 {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 120px;
      z-index: 1;
    }
    .dropdown2:hover .dropdown-content2 {
      display: block;
    }
    .dropdown-content2 a {
      display: block;
      padding: 10px;
      color: white;
      text-decoration: none;
    }
    .dropdown-content2 a:hover {
      background-color: #555;
    }

.right-container2 ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.right-container2 li {
  margin-left: 20px;
}

.right-container2 li a {
  color: #333;
  text-decoration: none;
}

.right-container2 li a:hover {
  text-decoration: underline;
}




*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
}
img{
    max-width: 100%;
       max-height: 100%;

}
.container{
    max-width: 1200px;
    margin: 0 auto;
}

.btn-1{
    display: inline-block;
    padding: 11px 25px;
    background-color: black;
    color: #fff;
    border-radius: 5px;
}

.ofert{
    padding: 20px 0 0 0;
    display: flex;
    justify-content: space-between;
}
.ofert-1{
    display: flex;
    align-items: center;
    flex-basis: calc(33.3% 25px);
    background-color: #f5f5f5;
    padding: 35px;
}
.ofert-img{
    flex-basis: 50%;
    margin-right: 15px;
}
.ofert-img img{
    width: 250px;
}
.ofert-txt{
    flex-basis: 50%;
    text-align: center;
}
.ofert-txt h3{
    color: #1111;
    font-family: 'Courier New', Courier, monospace;
    font-size: 25px;
    text-transform: uppercase;
    margin-bottom: 15px;
}
.btn-2{
    display: inline-block;
    padding: 7px 10px;
    background-color: #1111;
    color: #fff;
    border-radius: 5px;
    font-size: 15px;
}

.products{
    padding: 50px 0;
    text-align: center;
}
.products h2{
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    text-transform: uppercase;
    margin-bottom: 50px;
}
.products-content{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px;
}
.product{
   text-align: center;
   padding: 30px;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
}
.product img{
    width: 250px;
    height: 370px;
    margin-bottom: 10px;
}
.product h3{
    font-size: 20px;
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-bottom: 15px;
}

.product p, .precio{
 font-size: 10px;
 color: black;
 margin-bottom: 15px;
}
.precio{
    font-weight: 800;
}
.icons{
    padding: 50px 0 100px 0;
    display: flex;
    justify-content: space-between;
}
.icon-1{
    flex-basis: calc(33.3% - 30px);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 25px;
    background-color: #f5f5f5;
}
.icon-txt h3{
    font-size: 20px;
    color: black;
    font-family:   Arial, Helvetica, sans-serif;
    text-transform: uppercase;
}
.icon-txt p {
    font-size: 16px;
    color: black;
}
.blog{
    display: flex;
    justify-content: space-between;
    padding-bottom: 100px;

}
.blog-1{
    flex-basis: calc(33.3% - 30px);
	  border: black 3px solid;
  margin-left: auto;
  margin-right: auto;
	padding: 10px;
}
.blog-1 img{
    margin-bottom: 20px;
    width: 100px;
    height: 50px;
}
.blog-1 h3{
    font-size: 20px;
    color: black;
    font-family:  Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-bottom: 15px;
}
 .blog p{
    font-size: 16px;
    color: black;
 }


@media (max-widht:991px){
    .menu{
        padding: 20px;
    }
    .menu label{
        display: initial;
    }
    .menu .navbar{
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: black;
        display: none;
    }
    .menu .navnar ul li{
        width: 100%;
    }
    .menu .navbar ul li a{
        color: #1111;
    }
    #menu:checked ~ .navbar{
        display: initial;
    }
///////

.enc{

}






    ///////////////
    .logo{
        display: none;
    }
    .submenu:hover #carrito{
        min-width: 100%;
    }
    .header{
        min-height: 0vh;
    }
    .header-content{
        padding: 50px 0;
        flex-direction: column;
    }
    .header-img{
        display: none;
    }
    .header-txt{
        flex-basis: 100%;
        text-align: center;
    }
    .header-txt h1{
        font-size: 70px;
    }
    .ofert{
        padding: 30px 30px 0 30px ;
        flex-direction: column;
    }
    .ofert-1{
        margin-bottom: 30px;
    }
    .products{
        padding: 0 30px 30px 30px;
    }
    .products h2{
        margin-bottom: 30px;
    }
    .products-content{
        grid-template-columns: repeat(1, 1fr);
        gap: 30px;
    }
    .product img{
        width: 200px;
        height: 200px;
    }
    .icons{
        padding: 30px;
        flex-direction: column;
    }
    .icon-1{
        margin-bottom: 30px;
    }
    .blog{
        padding: 0 30px 30px 30px;
        flex-direction: column;
    }
    .blog-1{
        margin-bottom: 30px;
    }
  
}
    


//////////////////




 .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    /* Barra de búsqueda */
    .search-bar {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }
    .search-input {
      width: 300px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    /* Menú desplegable */
    
    /* Cuadros de productos */
    .product {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .product-box {
      width: calc(33.33% - 20px);
      margin: 10px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .product-box img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }
    /* Botón de filtro */
    .filter-btn {
      position: relative;
      top: 50%;
      left: 10px;
      transform: translateY(-150%);
      background-color: #007bff;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .filter-menu {
      position: fixed;
      top: 0;
      left: -100%;
      width: 250px;
      height: 100%;
      background-color: #f9f9f9;
      transition: left 0.3s ease;
      padding: 20px;
    }
    .filter-menu.show {
      left: 0;
    }
    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
  .search-input {
      width: 300px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    /* Menú desplegable */
    .dropdown {
      text-align: center;
      margin-bottom: 20px;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      width: 100%;
      z-index: 1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .dropdown-content a {
      display: block;
      padding: 10px;
      border-bottom: 1px solid #ccc;
      text-decoration: none;
      color: #333;
    }
    /* Cuadros de productos */
     .product {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
    }
    .product-box {
      width: 100%;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .product-box img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }
    @media screen and (max-width: 768px) {
      .dropdown-content {
        position: static;
        width: auto;
      }
    }

.barra{
    width: auto;
    height: auto;
    padding: 10px;
    background-color: gray;
}


@media screen and (max-width: 768px) {
      .barra {
        position: static;
        width: auto;
      }
    }



 
</style>

  <script>



      let prevScrollPos = window.pageYOffset;
  window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
      document.getElementById("header3").style.top = "0";
    } else {
      document.getElementById("header3").style.top = "-150px";
    }
    prevScrollPos = currentScrollPos;
  }

// JavaScript para mostrar/ocultar el menú de filtrado
    document.querySelector('.filter-btn').addEventListener('click', function() {
      document.querySelector('.filter-menu').classList.toggle('show');
    });

    document.querySelector('.close-btn').addEventListener('click', function() {
      document.querySelector('.filter-menu').classList.remove('show');
    });</script>










</head>




    <center>

<script src="JavaScript/SUBTITULO.js"></script>

<br><br><br><br><br><br>
<main>

<br><br><br><br><br><br>
	


 






      </div>
    </div>
  </div></li>


</div>
</head>
<body>
<header id="header3">
  <div>
    <img id="Logo"src="img/Logo.jpg" usemap="#Logo" >

        <map name="Logo">
<area shape="square" coords="2,2,394,276" href="index.html" alt="Area 1">
        

</map>
  </div>
<div class="right-container2">
      <ul>
	      <li><div class="dropdown2">
		      <a href="Sesion.html">Iniciar Sesión</a>
	      </li>
     <li><div class="dropdown2">
      <span>Sobre Nosotros</span>
      <div class="dropdown-content2">
        <a href="nosotros.html">Sobre Nosotros</a>
        <a href="clientes.html">Clientes</a>
</li>

         <li><div class="dropdown2">
      <span>Ventas</span>
      <div class="dropdown-content2">
        <a href="compras.html">Compra</a>
        <a href="categorias.html">Categorías</a></li>

        <li></li><li></li>  <li></li><li></li>
      </div>
    </div>
  </div></li>
</header>

</div>
        </li>
     
    </div>

<a href="what.html" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<center>

<section class="blog container">
   <div class="blog-1">
      
       <input type="text" class="search-input" placeholder="Buscar...">
     <input type="submit" name="bt1" value="Buscar...">
                <input type="submit" name="bt1" value="Filtro">
   </div>
</section>
<br><br>
    <header>
        <h1>Productos</h1>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            
            <?php  
	include("conexion.php");
	$query = "SELECT * FROM camaras";
	$resultado = $conexion->query($query);
	while ($row = $resultado->fetch_assoc()) {
		?>
		<div class="item">
			<img class="img-item" src="data:Image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>">
			<h4 class="titulo-item"><?php echo $row ['Nombre'];?></h4>
			<p><?php echo $row ['Descripcion']; ?></p>
			<p class="precio-item"><?php echo $row ['Precio']; ?></p>
            <button class="boton-item">Agregar al Carrito</button>
		</div>

	<?php	
	}
	?>
      
      
      <?php  
	include("conexion.php");
	$query = "SELECT * FROM circuitocerrado";
	$resultado = $conexion->query($query);
	while ($row = $resultado->fetch_assoc()) {
		?>
		<div class="item">
			<img class="img-item" src="data:Image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>">
			<h4 class="titulo-item"><?php echo $row ['Nombre'];?></h4>
			<p><?php echo $row ['Descripcion']; ?></p>
			<p class="precio-item"><?php echo $row ['Precio']; ?></p>
            <button class="boton-item">Agregar al Carrito</button>
		</div>

	<?php	
	}
	?>
        </div>
         <!--Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar"><a href="formularioCompra.html">Pagar</a></button>
            </div>
        </div>
    </section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3 id="fuente1">Contacto</h3>
            <ul>
                <li id="fuente2">Artemio Guerrero Sanchez<br><a href="sms: +52 55 4324 2042">+52 55 4324 2042</a></li><br>
                <li id="fuente2">Christian Narvaez <br><a href="sms: +52 5541166413">+52 55 4205 0093</a></li><br>
                <li id="fuente2">Artemio Guerrero Sanchez<br><a href="mailto: aguerrero@gnsoltec.mx">aguerrero@gnsoltec.mx</a></li><br>
                <li id="fuente2">Christian Narvaez<br><a href="mailto: cnarvaez@securex.com.mx">cnarvaez@securex.com.mx<br><br><a href="Form.html">Consúltanos</a></li>
            </ul>
        </div>
	    <div class="link">
        </div>
        <div class="link">
            <h3 id="fuente1">Examinar</h3>
            <ul>
                <li id="fuente2">Sobre nosotros</li><br>
                <li id="fuente2"><a href="nosotros.html">Visión</a></li><br><br>
                <li id="fuente2"><a href="nosotros.html">Misión</a></li><br><br>
                <li id="fuente2"><a href="clientes.html">Clientes</a></li><br><br>
            </ul> 
        </div>
	    <div class="link"></div>
        <div class="link">
            <h3 id="fuente1">Redes</h3>
            <ul>
                <li><a href="index.html"> <svg width="82px" height="82px" viewBox="0 0 103 103" fill="white" xmlns="http://www.w3.org/2000/svg" class="cbc">
<rect width="4500" height="4500" fill="black"/>
<g id="Insta">
<path id="Vector" d="M32 6C17.66 6 6 17.66 6 32V68C6 82.34 17.66 94 32 94H68C82.34 94 94 82.34 94 68V32C94 17.66 82.34 6 68 6H32ZM74 22C76.2 22 78 23.8 78 26C78 28.2 76.2 30 74 30C71.8 30 70 28.2 70 26C70 23.8 71.8 22 74 22ZM50 28C62.14 28 72 37.86 72 50C72 62.14 62.14 72 50 72C37.86 72 28 62.14 28 50C28 37.86 37.86 28 50 28ZM50 32C40.08 32 32 40.08 32 50C32 59.92 40.08 68 50 68C59.92 68 68 59.92 68 50C68 40.08 59.92 32 50 32Z">
</g>
</svg></a></li>
                <li><a href="Facebook.com"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 63 63" width="86px" height="86px" class="cbc" fill="white">
  <rect width="4500" height="4500" fill="black"/><path d="M48,7H16c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8h17V38h-6v-7h6v-5c0-7,4-11,10-11c3.133,0,5,1,5,1v6h-4 c-2.86,0-4,2.093-4,4v5h7l-1,7h-6v17h8c4.418,0,8-3.582,8-8V15C56,10.582,52.418,7,48,7z"/></a></svg>
    </li></li>
            </ul>
        </div>
	        <div class="link">
        </div>
	    
        </div>
</footer>
</body>
</html>
