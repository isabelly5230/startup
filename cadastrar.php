<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrar.css">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- Menu lateral -->
    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>
        
        <ul>
            <li class="item-menu">
                <a href="index.html">
                    <i class="bi bi-house-door-fill"></i>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <i class="bi bi-newspaper"></i>
                    <span class="txt-link">Concurso</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <i class="bi bi-buildings"></i>
                    <span class="txt-link">Startup</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <i class="bi bi-patch-question"></i>
                    <span class="txt-link">Ajuda</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <i class="bi bi-box-arrow-left"></i>
                    <span class="txt-link">Sair</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Container do formulário de cadastro -->
    <div class="form-container">
        <div class="form-box">
            <h2>Cadastro</h2>
            <form action="processa_cadastro.php" method="POST">
                <div class="input-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" placeholder="Digite seu nome completo" required>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirmar Senha</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme sua senha" required>
                </div>
                <div class="input-group">
                    <label for="dob">Data de Nascimento</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <button type="submit">Cadastrar</button>
                </form>
                
            </div>
    </div>

    <script src="cadastro.js"></script>
</body>
</html>
