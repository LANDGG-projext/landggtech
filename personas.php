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
                <img src="src/public/img/ana.jpg" alt="Ana Julia Pires Oliveira">
                <div class="persona-info">
                    <h2>Ana Julia Pires Oliveira</h2>
                    <p>Estudante de Engenharia da Computação no IFSP Guarulhos. Atua no projeto de extensão com foco na documentação técnica e organização dos requisitos do sistema.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/gabriel-costa.jpg" alt="Gabriel de Souza Costa">
                <div class="persona-info">
                    <h2>Gabriel de Souza Costa</h2>
                    <p>Estudante de Engenharia da Computação no IFSP Guarulhos. Colabora no desenvolvimento da lógica de programação e na integração das funcionalidades do portal.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/gabriel-feitoza.jpg" alt="Gabriel Feitoza da Silva">
                <div class="persona-info">
                    <h2>Gabriel Feitoza da Silva</h2>
                    <p>Estudante de Engenharia da Computação no IFSP Guarulhos. Focado na implementação técnica e no suporte às infraestruturas de hardware e software do projeto.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/lucas.jpg" alt="Lucas Bento da Silva Batista">
                <div class="persona-info">
                    <h2>Lucas Bento da Silva Batista</h2>
                    <p>Estudante do 7º semestre de Engenharia da Computação e pesquisador de Iniciação Científica no IFSP Guarulhos. Atua no desenvolvimento Full-Stack e em arquiteturas IoT voltadas para análise de sensores.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/maria.jpg" alt="Maria Eduarda Alves Selvatti">
                <div class="persona-info">
                    <h2>Maria Eduarda Alves Selvatti</h2>
                    <p>Estudante de Engenharia da Computação no IFSP Guarulhos. Responsável pelo design da interface e pela experiência do usuário, garantindo acessibilidade no ensino de lógica.</p>
                </div>
            </div>

            <div class="persona-perfil">
                <img src="src/public/img/nathalie.jpg" alt="Nathalie Gonçalves Xavier">
                <div class="persona-info">
                    <h2>Nathalie Gonçalves Xavier</h2>
                    <p>Estudante de Engenharia da Computação no IFSP Guarulhos. Atua no planejamento estratégico da startup LANDGG e na análise de viabilidade das ações de extensão.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'src/components/footer.php'; ?>