<?php
    $css_especifico = 'swot.css';
    $titulo_pagina = 'Análise SWOT';
    include_once 'src/components/head.php';
    include_once 'src/components/navbar.php';
?>

<main class="page-content">
    <div class="container animate-fade-up">
        <header class="swot-header">
            <h1>Análise <span class="highlight">SWOT</span></h1>
            <p class="subtitle">Planejamento Estratégico da Startup LANDGG Technology</p>
        </header>

        <section class="swot-grid">
            <!-- FORÇAS (Strengths) -->
            <div class="swot-card forces">
                <div class="card-header">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h2>Forças</h2>
                </div>
                <p class="card-desc">Quais são as principais competências da equipe?</p>
                <ul class="swot-list">
                    <li>Equipe multidisciplinar na área de Engenharia da Computação</li>
                    <li>Liderança ágil estruturada com Scrum Master e Suplente</li>
                    <li>Boa comunicação entre os membros</li>
                    <li>Equipe extremamente proativa</li>
                    <li>Experiência com diversas tecnologias de desenvolvimento de hardware e software</li>
                </ul>
            </div>

            <!-- FRAQUEZAS (Weaknesses) -->
            <div class="swot-card weaknesses">
                <div class="card-header">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <h2>Fraquezas</h2>
                </div>
                <p class="card-desc">Quais são as limitações da equipe neste momento?</p>
                <ul class="swot-list">
                    <li>Perfil da equipe majoritariamente acadêmico, com pouca experiência em gestão de negócios</li>
                    <li>Desafios de gestão do tempo (muitos trabalham + projetos extracurriculares)</li>
                    <li>Necessidade de aprofundar conhecimentos pedagógicos específicos para o público infantil</li>
                </ul>
            </div>

            <!-- OPORTUNIDADES (Opportunities) -->
            <div class="swot-card opportunities">
                <div class="card-header">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polygon points="17 6 23 6 23 12"/></svg>
                    </div>
                    <h2>Oportunidades</h2>
                </div>
                <p class="card-desc">Quais fatores externos podem ajudar a startup?</p>
                <ul class="swot-list">
                    <li>Demandas de escolas por ensino de tecnologia acessível e inclusivo</li>
                    <li>Apoio e infraestrutura do IFSP Câmpus Guarulhos para projetos de extensão</li>
                    <li>Tendência de mercado voltada para o desenvolvimento saudável da criança no mundo digital</li>
                </ul>
            </div>

            <!-- AMEAÇAS (Threats) -->
            <div class="swot-card threats">
                <div class="card-header">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                    </div>
                    <h2>Ameaças</h2>
                </div>
                <p class="card-desc">Quais fatores externos podem dificultar o projeto?</p>
                <ul class="swot-list">
                    <li>Concorrência com métodos de ensino tradicionais ou plataformas digitais já estabelecidas</li>
                    <li>Concorrência com outras atividades acadêmicas/profissionais dos membros</li>
                    <li>Resistência cultural de pais e escolas que associam o ensino de tecnologia exclusivamente ao uso de telas</li>
                </ul>
            </div>
        </section>
    </div>
</main>

<?php include_once 'src/components/footer.php'; ?>
