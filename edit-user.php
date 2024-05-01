<h1>Editar Usuário</h1>
<?php 
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM usuarios WHERE id = $id";

  $res = $conn->query($sql);
  $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?=$row->id?>">
  <div class="mb-3">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control" value="<?=$row->nome?>" required>
  </div>
  <div class="mb-3">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" class="form-control" value="<?=$row->email?>" required>
  </div>
  <div class="mb-3">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="data_nasc">Data de Nascimento:</label>
    <input type="date" name="data_nasc" id="data_nasc" class="form-control" value="<?=$row->data_nasc?>" required>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>