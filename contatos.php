<?php 
    $css_especifico = 'contatos.css'; 
    $titulo_pagina = 'Contato';
    include_once 'src/components/head.php'; 
    include_once 'src/components/navbar.php'; 

    $mensagem_retorno = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $assunto = $_POST['assunto'] ?? '';
        $conteudo = $_POST['conteudo'] ?? '';

        $host = 'localhost';
        $db   = 'landgg_startup';
        $user = 'root';
        $pass = '';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("INSERT INTO mensagens (nome, email, assunto, conteudo) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nome, $email, $assunto, $conteudo]);

            $mensagem_retorno = "Mensagem enviada com sucesso para o ScrumMaster!";
        } catch (PDOException $e) {
            $mensagem_retorno = "Erro no envio. Verifique a conexão com o banco de dados.";
        }
    }
?>

<main class="page-content">
    <div class="container-contato">
        
        <div class="contato-info">
            <h1>Fale com a <span class="highlight">LANDGG</span></h1>
            <p>Tem dúvidas sobre nossas capacitações ou quer levar a lógica desplugada para sua instituição? Envie uma mensagem para o nosso ScrumMaster.</p>
            
            <div class="info-detalhes">
                <p>📍 IFSP Campus Guarulhos</p>
                <p>📧 contato@landgg.com.br</p>
                <p>⏰ Seg a Sex - 08h às 18h</p>
            </div>
        </div>

        <div class="contato-form-wrapper">
            <?php if(!empty($mensagem_retorno)): ?>
                <p class="alerta"><?php echo htmlspecialchars($mensagem_retorno); ?></p>
            <?php endif; ?>

            <form action="contatos.php" method="POST" class="formulario-contato">
                <div class="campo-duplo">
                    <div class="campo">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                    </div>

                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>
                </div>

                <div class="campo">
                    <label for="assunto">Assunto</label>
                    <input type="text" id="assunto" name="assunto" placeholder="Sobre o que quer falar?" required>
                </div>

                <div class="campo">
                    <label for="conteudo">Mensagem</label>
                    <textarea id="conteudo" name="conteudo" rows="4" placeholder="Escreva sua mensagem aqui..." required></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar Mensagem</button>
            </form>
        </div>

    </div>
</main>

<?php include_once 'src/components/footer.php'; ?>