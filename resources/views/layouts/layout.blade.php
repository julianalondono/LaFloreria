<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">  

    ul{
    position: absolute;
    left:0px;
    width: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 120%;}

    ul li{
    display: inline-block;
    color:white;
    text-decoration:none;
    padding: 0px 65px;
    border-bottom: 1px solid white;
    height: 50px;}
    
    li a{
    display: inline;
    text-decoration: none;
    }

    </style>
</head>
<body>
<header>
<div class="navbar-collapse collapse">

  <ul class="nav navbar-nav navbar-center">
    
    <li class="nav-item" >
     <a class="nav-link"href="../Cliente/">Clientes</a></li>
    
    <li class="nav-item">
     <a class="nav-link" href="../Empleado/">Empleados</a></li>
    
    <li class="nav-item">
     <a class="nav-link" href="../Proveedor/">Proveedores</a></li>
    
    <li class="nav-item">
     <a class="nav-link" href="../Flor/">Flores</a></li>
         
     <li class="nav-item">
     <a class="nav-link" href="../Pedido/">Pedidos</a></li>
    
    <li class="nav-item">
     <a class="nav-link" href="../Envio/">Envíos</a></li>

    
  </ul>
  
    </div>

</header>

	<div class="container-fluid" style="margin-top: 100px">
 
		@yield('content')
	</div>
	<style type="text/css">
	.table {
		border-top: 2px solid #ccc;
 
	}
</style>
</body>
</html>