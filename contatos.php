<?php
    $css_especifico = 'contatos.css';
    $titulo_pagina = 'Contato';
    include_once 'src/components/head.php';
    include_once 'src/components/navbar.php';

    $mensagem_retorno = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Limpeza básica de segurança contra XSS
        $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
        $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $assunto = htmlspecialchars(trim($_POST['assunto'] ?? ''));
        $conteudo = htmlspecialchars(trim($_POST['conteudo'] ?? ''));

        // Verifica se os campos principais não estão vazios
        if (!empty($nome) && !empty($email) && !empty($conteudo)) {

            // ========================================================
            // OPÇÃO 1: Enviar por E-mail
            // (Pode falhar no localhost sem configuração de SMTP)
            // ========================================================
            $para = "andggprojetodeextensao@gmail.com"; // Mude para seu e-mail
            $corpo = "Nome: $nome\nE-mail: $email\nAssunto: $assunto\n\nMensagem:\n$conteudo";
            $cabecalhos = "From: $email" . "\r\n" . "Reply-To: $email";

            // Tenta enviar o e-mail usando a função nativa do PHP
            if (mail($para, $assunto, $corpo, $cabecalhos)) {
                $mensagem_retorno = "Mensagem enviada com sucesso!";
            } else {
                $mensagem_retorno = "Erro no envio por e-mail (servidor local pode não ter suporte).";
            }

            // ========================================================
            // OPÇÃO 2: Salvar em um arquivo .txt
            // (Ótimo para debugar e ver a lógica funcionando localmente)
            // Descomente o bloco abaixo para usar
            // ========================================================
            /*
            $registro = "Data: " . date('d/m/Y H:i:s') . "\nNome: $nome\nEmail: $email\nAssunto: $assunto\nMensagem: $conteudo\n-----------------------\n";
            if (file_put_contents('mensagens_locais.txt', $registro, FILE_APPEND)) {
                $mensagem_retorno = "Mensagem registrada no arquivo com sucesso!";
            }
            */

        } else {
            $mensagem_retorno = "Por favor, preencha todos os campos corretamente.";
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
