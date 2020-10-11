<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/inicio.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Yantramanav' rel='stylesheet'>
<title>Vista de productos</title>
</head>
<body>

<ul>
  <li><a href="inicio.html">Inicio</a></li>
  <li><a href="listado.php">Listado de productos</a></li>
  <li><a href="alta.html">Alta de productos</a></li>
  <li><a href="editar.php">Edición de productos</a></li>
  <li><a href="baja.php">Baja de productos</a></li>
  <li><a href="#" onclick="salir();">Salir</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:100%;">
    <div class="container">
      <h3>Hola <label id="usuario_text"></label>, aquí podras ver el producto seleccionado</h3>          
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Producto</th>
            <th>Codigo</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th>Descripcion</th>
            <th>Precio/Marca/Descuento</th>
            <th>Estatus</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'php/conexion.php';
            $estatus="";
            $id = $_GET['id'];
            $query='SELECT * FROM producto WHERE id='.$id.'';
            $resultado=mysqli_query($conexion, $query);
            while($row=mysqli_fetch_array($resultado))
            {
              if($row["estatus"]==1)
              {
                $estatus="Alta";
              }
              else if($row["estatus"]==2)
              {
                $estatus="Editado";
              }
              else if($row["estatus"]==3)
              {
                $estatus="Baja";
              }
              echo '<tr>
                      <td>'.$row["id"].'</td>
                      <td>'.$row["producto"].'</td>
                      <td>'.$row["codigo"].'</td> 
                      <td>'.$row["categoria"].'</td>
                      <td>'.$row["cantidad"].'</td>
                      <td>'.$row["descripcion"].'</td>
                      <td>Precio:'.$row["precio"].', Marca: '.$row["marca"].', Descuento: '.$row["descuento"].'</td>
                      <td>'.$estatus.'</td>
                    </tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
</div>
</body>
<script>
    let usuario = localStorage.getItem('nombre_usuario');
    console.log(usuario);
    document.getElementById("usuario_text").innerHTML= usuario;
    function salir(){
      localStorage.clear();
      window.location="index.html";
    }
</script>
</html>