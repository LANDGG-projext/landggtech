<?php
$css_especifico = 'quemsomos.css';
$titulo_pagina = 'Quem Somos';
include_once 'src/components/head.php';
include_once 'src/components/navbar.php';
?>

<main class="page-content">
    <section class="historia-startup">
        <h1>A História da LANDGG Technology</h1>
        <p>A LANDGG nasceu da união de estudantes de Engenharia da Computação. O projeto faz parte da curricularização de extensão do IFSP Campus Guarulhos, com o objetivo de levar o conhecimento acadêmico para a comunidade externa.</p>
        <p>Nossa atuação principal é o ensino do pensamento computacional e da lógica de programação desplugada para crianças, provando que é possível aprender os fundamentos da tecnologia antes mesmo de sentar na frente de um computador.</p>
    </section>

    <section class="detalhes-acoes">
        <h2>Como podemos ajudar nossos demandantes</h2>

        <div id="consultoria" class="acao-detalhe">
            <h3>Consultoria</h3>
            <p>Avaliamos a infraestrutura tecnológica atual do cliente e sugerimos melhorias em arquitetura de software, bancos de dados e integração de sistemas.</p>
        </div>

        <div id="capacitacao" class="acao-detalhe">
            <h3>Capacitação</h3>
            <p>Ministramos oficinas e cursos rápidos focados em lógica de programação e ferramentas tecnológicas, voltados para escolas e instituições de ensino básico.</p>
        </div>

        <div id="solucao" class="acao-detalhe">
            <h3>Desenvolvimento de solução</h3>
            <p>Desenvolvimento de material para soluções desplugadas.</p>
        </div>

        <div id="projetos" class="acao-detalhe">
            <h3>Projetos de Engenharia</h3>
            <p>Realizamos projetos completos que unem hardware e software, desde o levantamento de requisitos até a entrega final da solução validada em laboratório.</p>
        </div>
    </section>
</main>

<?php include_once 'src/components/footer.php'; ?>
