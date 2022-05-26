<?php 
require "../inc/funcoes-usuarios.php";
require "../inc/cabecalho-admin.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$usuario = lerUmUsuario($conexao, $id);
?>
       
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Atualizar Usuário</h2>

    <form class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

      <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" required type="text" id="nome" name="nome" value="<?=$usuario['nome']?>">
      </div>

      <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" required type="email" id="email" name="email" value="<?=$usuario['email']?>">
      </div>

      <div class="form-group">
        <label for="nova-senha">Senha</label>
        <input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
      </div>

      <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select class="custom-select" name="tipo" id="tipo" required>
          <option value="<?=$tipo?>"></option>                
          <option <?php if($usuario['tipo'] == 'editor'){echo " selected ";}?> value="editor">Editor</option>     
          <option <?php if($usuario['tipo'] == 'admin'){echo " selected ";}?>	value="admin">Administrador</option>
        </select>
      </div>
      
      <button class="btn btn-primary" name="atualizar">Atualizar usuário</button>
    </form>
      
  </article>
</div>

<?php
require "../inc/rodape-admin.php"; 
?>