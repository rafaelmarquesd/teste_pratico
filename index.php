<?php
include("db_connection.php");

$consulta = "SELECT * FROM pessoas";
$con = $mysqli->query($consulta) or die ($mysqli->error);

?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
    </head>
    <body>
      <table>
        <tr>
          <td>Id</td>
          <td>Nome</td>
          <td>Nascimento</td>
          <td>Sexo</td>
          <td>CPF</td>
          <td>RG</td>
          <td>Email</td>
          <td>Telefone</td>
          <td>Celular</td>
          <td>Profissão</td>
        </tr>
        <?php while($dado =$con->fetch_array()){ ?>
        <tr>
          <td><?php echo $dado["id"] ?></td>
          <td><?php echo $dado["nome"] ?></td>
          <td><?php echo $dado["nascimento"] ?></td>
          <td><?php echo $dado["sexo"] ?></td>
          <td><?php echo $dado["cpf"] ?></td>
          <td><?php echo $dado["rg"] ?></td>
          <td><?php echo $dado["email"] ?></td>
          <td><?php echo $dado["telefone"] ?></td>
          <td><?php echo $dado["celular"] ?></td>
          <td><?php echo $dado["profissao_id"] ?></td>
        </tr>
        <?php } ?>
      </table>
    </body>
</html>