<?php include __DIR__ . '/../inicio-html.php'; ?>

    <form action="/realiza-login" method="post">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha">
        </div>
        <button class="btn btn-primary">
            Entrar
        </button>
    </form>

<?php include __DIR__ . '/../fim-html.php'; ?>