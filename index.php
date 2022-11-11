<?php
include("db_connection.php");

$consulta = "SELECT * FROM pessoas";
$con = $mysqli->query($consulta) or die ($mysqli->error);
$consulta2 = "SELECT * FROM profissoes";
$con2 = $mysqli->query($consulta2) or die ($mysqli->error);
?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
    </head>
    <body>
      <table>
        <tr>
          <td>Nome</td>
          <td>Nascimento</td>
          <td>Sexo</td>
          <td>CPF</td>
          <td>Email</td>
          <td>Celular</td>
          <td>Profissão</td>
        </tr>
        <?php 
        while($dado2 = $con2->fetch_array())
        while($dado = $con->fetch_array()){ ?>
        <tr>
          <td><?php echo $dado["nome"] ?></td>
          <td><?php echo $dado["nascimento"] ?></td>
          <td><?php echo $dado["sexo"] ?></td>
          <td><?php echo $dado["cpf"] ?></td>
          <td><?php echo $dado["email"] ?></td>
          <td><?php echo $dado["celular"] ?></td>
          <td><?php echo $dado2["nome"] ?></td>
        </tr>
        <?php } ?>
      </table>
    </body>
</html>