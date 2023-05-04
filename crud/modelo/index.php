<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y mysql </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da6a230c93.js" crossorigin="anonymous"></script>
    
</head> 

<body>
  <script>
  function eliminar(){
    var respuesta=confirm("¿Estas seguro que desea eliminar a esta persona?");
    return respuesta
  }

  </script>

    <h1 class="text-center p-3">  FORMULARIO DE PERSONAS </h1>
    <?php
      include "conexion.php";
     // include "../controlador/eliminar_persona.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST"> 
            
            <h3 class= "text-center text-secondary"> Registro de personas</h3>
            <?php
          
            include "../controlador/resgistro_personas.php";
            ?>
           <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
              <input type="text" class="form-control" name="nombre">
             
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
              <input type="text" class="form-control" name="apellido">
             
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
              <input type="text" class="form-control" name="dni">
             
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
              <input type="date" class="form-control" name="fecha">
             
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Correo</label>
              <input type="text" class="form-control" name="correo">
              </div>
        
  
  
            <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok">Registrar</button>
       </form>
       <div class="col-8 p-4">
       <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DNI</th>
      <th scope="col">FECHA DE NAC</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>

    <?php
    include "conexion.php";
    $sql = $conexion->query(" select * from persona ");
    while ($datos = $sql->fetch_object()) { ?>
      <tr>
         <td><?= $datos->id_persona ?></td>
         <td><?= $datos->nombre ?></td>
         <td><?= $datos->apellido ?></td>
         <td><?= $datos->dni ?></td>
         <td><?= $datos->fecha_nac ?></td>
         <td><?= $datos->correo ?></td>
         <td>
          <a href="modificar_persona.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i> </a>
          <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i> </a>

         </td>   
        </tr>
       
       <?php }
       ?>

  
      </tbody>
       </table>
         </div>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></>

</body>
</html>