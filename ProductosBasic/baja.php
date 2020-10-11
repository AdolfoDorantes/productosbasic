<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/inicio.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Yantramanav' rel='stylesheet'>
<title>Baja de productos</title>
</head>
<body>

<ul>
  <li><a href="inicio.html">Inicio</a></li>
  <li><a href="listado.php">Listado de productos</a></li>
  <li><a href="alta.html">Alta de productos</a></li>
  <li><a href="editar.php">Edición de productos</a></li>
  <li><a class="active" href="baja.php">Baja de productos</a></li>
  <li><a href="#" onclick="salir();">Salir</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:100%;">
  <h4>Hola <label id="usuario_text"></label>, por favor seleccione el producto a dar de baja.</h3><br><br>
  <form action="php/baja.php" method="post">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Producto a dar de baja</label>
      <!---<select id="inputState" class="form-control" onchange="completar(this.value);">-->
      <input list="nombre_productos1" class="form-control" name="nombres_productos" type="text" placeholder="Seleccione" onchange="completar(this.value);">
      <datalist id="nombre_productos1">
          <?php
          include 'php/conexion.php';
          $query='SELECT id, producto, categoria FROM producto WHERE estatus=1 OR estatus=2';
          $resultado=mysqli_query($conexion, $query);
          while($row=mysqli_fetch_array($resultado))
          {
            echo "<option value='".$row['producto']." (".$row['categoria'].")'></option>";
          }
          ?>
      </datalist>
    </div>
     <div class="form-group col-md-6">
      <label >Id de producto</label>
      <input type="text" class="form-control" id="id_user" placeholder="Id" name="id_user">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Producto</label>
      <input type="text" class="form-control" id="nombre_p" placeholder="Producto" name="producto" disabled>
    </div>
    <div class="form-group col-md-6">
      <label >Codigo</label>
      <input type="text" class="form-control" id="apellido_p" placeholder="Codigo" name="codigo" disabled>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Categoria</label>
      <input type="text" class="form-control" id="apellido_m" placeholder="Categoria" name="categoria" disabled>
    </div>
    <div class="form-group col-md-6">
      <label>Cantidad</label>
      <input type="text" class="form-control" id="telefono" placeholder="Cantidad" name="cantidad" disabled>
    </div>
  </div>
  <div class="form-group">
    <label>Descripcion</label>
    <input type="text" class="form-control" id="direccion" placeholder="Descripcion" name="descripcion" disabled>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Precio</label>
      <input type="text" class="form-control" id="facebook" placeholder="Precio del producto" name="precio" disabled>
    </div>
    <div class="form-group col-md-4">
      <label>Marca</label>
      <input type="text" class="form-control" id="twitter" placeholder="Marca del producto" name="marca" disabled>
    </div>
    <div class="form-group col-md-4">
      <label>Descuento</label>
      <input type="text" class="form-control" id="instagram" placeholder="Descuento del producto" name="descuento" disabled>
    </div>
  </div>
  <button type="submit" class="btn btn-danger">Dar de baja registro</button>
</form>
</div>
</body>
<script src="js/baja.js"></script>
<script>
    function salir(){
      localStorage.clear();
      window.location="index.html";
    }
</script>
</html>