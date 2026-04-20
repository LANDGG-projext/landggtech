<?php
$css_especifico = 'personas.css';
$titulo_pagina = 'Personas';
include_once 'src/components/head.php';
include_once 'src/components/navbar.php';
?>

<main class="page-content">
    <div class="container">
        <h1>Nossa Equipe</h1>

        <div class="lista-personas">
            <div class="persona-perfil">
                <img src="src/public/img/ana.jpeg" alt="Ana Julia Pires Oliveira">
                <div class="persona-info">
                    <h2>Ana Julia Pires Oliveira</h2>
                    <p>Focada na implementação técnica de funcionalidades e na arquitetura de sistemas, transformando requisitos complexos em soluções digitais eficientes para a plataforma.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/gabriel.jpeg" alt="Gabriel de Souza Costa">
                <div class="persona-info">
                    <h2>Gabriel de Souza Costa</h2>
                    <p>Atua no desenvolvimento da lógica de programação e na integração de sistemas, garantindo a robustez das funcionalidades e a estabilidade do ecossistema tecnológico.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/feitoza.jpeg" alt="Gabriel Feitoza da Silva">
                <div class="persona-info">
                    <h2>Gabriel Feitoza da Silva</h2>
                    <p>Responsável pela construção de software e infraestrutura técnica, com foco em otimização de performance e suporte à escalabilidade do portal.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/lucas.jpeg" alt="Lucas Bento da Silva Batista">
                <div class="persona-info">
                    <h2>Lucas Bento da Silva Batista</h2>
                    <p>Especialista em desenvolvimento Full-Stack, aplica arquiteturas modernas para criar interfaces responsivas e sistemas integrados voltados à análise de dados.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/duda.jpeg" alt="Maria Eduarda Alves Selvatti">
                <div class="persona-info">
                    <h2>Maria Eduarda Alves Selvatti</h2>
                    <p>Atua no suporte direto à gestão ágil e no planejamento organizacional, assegurando a continuidade dos processos e a sincronia entre os requisitos pedagógicos e o desenvolvimento.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/nath.jpeg" alt="Nathalie Gonçalves Xavier">
                <div class="persona-info">
                    <h2>Nathalie Gonçalves Xavier</h2>
                    <p>Responsável pela facilitação de metodologias ágeis, gestão de sprints e remoção de impedimentos, garantindo a eficiência produtiva e a entrega de valor no projeto de pensamento computacional.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'src/components/footer.php'; ?>
