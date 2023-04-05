

<form action="" method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome completo">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" name="senha" id="senha">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="termos" id="termos">
        <label class="form-check-label" for="termos">Aceitar termos de uso</label>
    </div>
    <button name="action" type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php if (isset($_POST['enviar']) );?>
<div class="card">
    <div class="card-body">
        <div><strong>Nome:</strong> <?=$nome = $_POST['nome'];?></div>
        <div><strong>E-mail:</strong><?=$email = $_POST['email'];?></div>
        <div><strong>Senha:</strong><?=$senha = $_POST['senha'];?></div>
        <div><strong>Aceitou os termos?</strong><<?= isset($_POST['termos']) ?>/div>
    </div>
</div>