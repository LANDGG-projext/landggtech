<?php
    $css_especifico = 'main.css';
    $titulo_pagina = 'Página Principal';
    include_once 'src/components/head.php';
    include_once 'src/components/navbar.php';
?>

<main class="page-content">
    <div class="container">
        <section class="dobra-1-hero section-margin">
            <div class="hero-content">
                <h1>Equipe <span class="highlight">LANDGG</span></h1>
                <p>Conectando mentes no IFSP Campus Guarulhos</p>
            </div>
            <img src="src/public/img/equipe-ifsp.jpeg" alt="Foto da equipe no IFSP Guarulhos">
        </section>

        <section class="dobra-2-mvv section-margin">
            <h2>Nossa Identidade</h2>
            <div class="mvv-container">
                <div class="mvv-item">
                    <h3>Missão</h3>
                    <p>Transformar o aprendizado de tecnologia em uma experiência lúdica e acessível, ensinando os fundamentos da programação de forma desplugada para desenvolver o raciocínio crítico e criativo das crianças, independentemente de dispositivos digitais.</p>
                </div>
                <div class="mvv-item">
                    <h3>Visão</h3>
                    <p>Ser a startup referência em educação tecnológica humanizada, provando que a lógica da inovação nasce na mente e na colaboração, alcançando escolas em todo o país com métodos que conectam crianças ao futuro de forma saudável e inclusiva.</p>
                </div>
                <div class="mvv-item">
                    <h3>Valores</h3>
                    <ul class="lista-valores">
                        <li><strong>Educação com Propósito:</strong> Priorizar o aprendizado real acima de ferramentas tecnológicas.</li>
                        <li><strong>Criatividade "Fora da Caixa":</strong> Enxergar tecnologia em conceitos, movimentos e lógica, não apenas em telas.</li>
                        <li><strong>Acessibilidade e Inclusão:</strong> Democratizar o ensino de programação para ambientes com ou sem recursos digitais.</li>
                        <li><strong>Colaboração:</strong> Valorizar o trabalho em equipe (amigos e escola) como motor da inovação.</li>
                        <li><strong>Ética e Infância:</strong> Respeitar o tempo e o desenvolvimento saudável da criança no contato com o mundo digital.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="dobra-3-acoes section-margin">
            <h2>Nossas Ações de Extensão</h2>
            <div class="cards-container">
                <a href="quemsomos.php#consultoria" class="card-acao">
                    <img src="src/public/img/consultoria.svg" alt="Ícone Consultoria">
                    <h3>Consultoria</h3>
                    <p>Orientação técnica para projetos tecnológicos.</p>
                </a>
                <a href="quemsomos.php#capacitacao" class="card-acao">
                    <img src="src/public/img/capacitacao.svg" alt="Ícone Capacitação">
                    <h3>Capacitação</h3>
                    <p>Treinamentos em lógica de programação e ferramentas.</p>
                </a>
                <a href="quemsomos.php#solucao" class="card-acao">
                    <img src="src/public/img/dev.svg" alt="Ícone Solução">
                    <h3>Desenvolvimento de solução</h3>
                    <p>Desenvolvimento de material para soluções desplugadas.</p>
                </a>
                <a href="quemsomos.php#projetos" class="card-acao">
                    <img src="src/public/img/engenharia.svg" alt="Ícone Projetos de Engenharia">
                    <h3>Projetos de Engenharia</h3>
                    <p>Soluções completas englobando hardware e software.</p>
                </a>
            </div>
        </section>

        <section class="dobra-4-equipe section-margin">
            <h2>Nossa Equipe</h2>
            <div class="cards-container">
                <a href="personas.php" class="card-persona">
                    <img src="src/public/img/ana.jpeg" alt="Ana Julia Pires Oliveira">
                    <h3>Ana Julia Pires Oliveira</h3>
                    <p>Engenharia da Computação - IFSP</p>
                </a>
                <a href="personas.php" class="card-persona">
                    <img src="src/public/img/gabriel.jpeg" alt="Gabriel de Souza Costa">
                    <h3>Gabriel de Souza Costa</h3>
                    <p>Engenharia da Computação - IFSP</p>
                </a>
                <a href="personas.php" class="card-persona">
                    <img src="src/public/img/feitoza.jpeg" alt="Gabriel Feitoza da Silva">
                    <h3>Gabriel Feitoza da Silva</h3>
                    <p>Engenharia da Computação - IFSP</p>
                </a>
                <a href="personas.php" class="card-persona">
                    <img src="src/public/img/lucas.jpeg" alt="Lucas Bento da Silva Batista">
                    <h3>Lucas Bento da Silva Batista</h3>
                    <p>Engenharia da Computação - IFSP</p>
                </a>
                <a href="personas.php" class="card-persona">
                    <img src="src/public/img/duda.jpeg" alt="Maria Eduarda Alves Selvatti">
                    <h3>Maria Eduarda Alves Selvatti</h3>
                    <p>Engenharia da Computação - IFSP</p>
                </a>
                <a href="personas.php" class="card-persona">
                    <img src="src/public/img/nath.jpeg" alt="Nathalie Gonçalves Xavier">
                    <h3>Nathalie Gonçalves Xavier</h3>
                    <p>Engenharia da Computação - IFSP</p>
                </a>
            </div>
        </section>

        <section class="dobra-5-localizacao section-margin">
            <h2>Onde Estamos</h2>
            <p>IFSP Campus Guarulhos - Av. Salgado Filho, 3501 - Vila Rio de Janeiro, Guarulhos - SP, 07115-000</p>
            <div class="mapa-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5970564612244!2d-46.53953058990478!3d-23.438918658654174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef51fbe5f8681%3A0x1f8cf929993dc97!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%20IFSP%20Guarulhos!5e0!3m2!1spt-BR!2sbr!4v1776575060877!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
        </section>
    </div>
</main>

<?php include_once 'src/components/footer.php'; ?>
