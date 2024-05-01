<h1>Listar Usuários</h1>

<?php 
  $sql = "SELECT * FROM usuarios";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0) {
    echo "<table class='table table-hover table-striped table-bordered'>";
      echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nome</th>";
        echo "<th>E-mail</th>";
        echo "<th>Data de Nascimento</th>";
        echo "<th>Ações</th>";
      echo "</tr>";
    while($row = $res->fetch_object()) {
      echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->nome . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->data_nasc . "</td>";
        echo "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar&id=$row->id';\">Editar</button>
                <button class='btn btn-danger' 
                  onclick=\"confirm('tem certeza que deseja excluir?')
                   ? location.href='?page=salvar&acao=excluir&id=$row->id' 
                   : false\">Excluir</button>
              </td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  else {
    echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
?>