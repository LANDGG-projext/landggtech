<?php
    $css_especifico = 'swot.css';
    $titulo_pagina = 'Análise SWOT & Competências';
    include_once 'src/components/head.php';
    include_once 'src/components/navbar.php';
?>

<main class="page-content">
    <div class="container container-swot-wide animate-fade-up">
        <header class="swot-header">
            <h1>Planejamento & <span class="highlight">SWOT</span></h1>
            <p class="subtitle">Análise Estratégica da Startup e Diagnóstico de Competências da Equipe</p>
        </header>

        <!-- Main Tab Toggle -->
        <div class="swot-tabs-nav">
            <button id="btn-tab-startup" class="swot-tab-btn active" onclick="switchMainTab('startup')">Startup LANDGG</button>
            <button id="btn-tab-team" class="swot-tab-btn" onclick="switchMainTab('team')">Integrantes da Equipe</button>
        </div>

        <!-- TAB CONTENT 1: STARTUP SWOT -->
        <div id="tab-content-startup" class="swot-tab-content active">
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

        <!-- TAB CONTENT 2: TEAM MEMBERS EXPLORER -->
        <div id="tab-content-team" class="swot-tab-content">
            <div class="team-explorer">
                <!-- Sidebar Selectors -->
                <div class="members-list">
                    <div id="sel-ana" class="member-selector active" onclick="selectMember('ana')">
                        <img src="src/public/img/ana.jpeg" alt="Ana Júlia">
                        <div class="member-selector-info">
                            <h3>Ana Júlia P. Oliveira</h3>
                            <span>Desenvolvedora</span>
                        </div>
                    </div>

                    <div id="sel-gabriel-c" class="member-selector" onclick="selectMember('gabriel-c')">
                        <img src="src/public/img/gabriel.jpeg" alt="Gabriel Costa">
                        <div class="member-selector-info">
                            <h3>Gabriel S. Costa</h3>
                            <span>Desenvolvedor</span>
                        </div>
                    </div>

                    <div id="sel-gabriel-f" class="member-selector" onclick="selectMember('gabriel-f')">
                        <img src="src/public/img/feitoza.jpeg" alt="Gabriel Feitoza">
                        <div class="member-selector-info">
                            <h3>Gabriel F. da Silva</h3>
                            <span>Desenvolvedor</span>
                        </div>
                    </div>

                    <div id="sel-lucas" class="member-selector" onclick="selectMember('lucas')">
                        <img src="src/public/img/lucas.jpeg" alt="Lucas Bento">
                        <div class="member-selector-info">
                            <h3>Lucas B. Batista</h3>
                            <span>Desenvolvedor</span>
                        </div>
                    </div>

                    <div id="sel-maria" class="member-selector" onclick="selectMember('maria')">
                        <img src="src/public/img/duda.jpeg" alt="Maria Eduarda">
                        <div class="member-selector-info">
                            <h3>Maria E. A. Selvatti</h3>
                            <span>Scrum Master Suplente</span>
                        </div>
                    </div>

                    <div id="sel-nathalie" class="member-selector" onclick="selectMember('nathalie')">
                        <img src="src/public/img/nath.jpeg" alt="Nathalie Xavier">
                        <div class="member-selector-info">
                            <h3>Nathalie G. Xavier</h3>
                            <span>Scrum Master</span>
                        </div>
                    </div>
                </div>

                <!-- Detail Panel -->
                <div class="member-details-container">
                    
                    <!-- MEMBER 1: ANA JÚLIA -->
                    <div id="detail-ana" class="member-detail-content active">
                        <div class="member-card-left">
                            <img src="src/public/img/ana.jpeg" alt="Ana Júlia Pires Oliveira">
                            <h2>Ana Júlia P. Oliveira</h2>
                            <div class="member-role">Desenvolvedora</div>
                            <div class="member-course">Engenharia da Computação</div>
                            <div class="score-badge-circle">Média Soft Skills: 7,9</div>
                            
                            <div class="member-section-title">Perfil Profissional</div>
                            <p class="member-bio">Graduanda em Engenharia da Computação com sólida base em desenvolvimento de software (C, Java, Python). Possui experiência profissional em Engenharia de Dados e Analytics, focada em estruturação de processos lógicos. Atualmente, integra o GERSE para expandir conhecimentos na interface entre software e hardware.</p>

                            <div class="member-section-title">Responsabilidades</div>
                            <p class="member-responsibilities">Responsável pela arquitetura lógica do método pedagógico, tradução de conceitos de programação para o formato "unplugged" e desenvolvimento de ferramentas de suporte via software para a gestão da startup.</p>

                            <div class="member-section-title">Ferramentas & Stacks</div>
                            <div class="tag-container">
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">SQL</span>
                                <span class="tech-tag">Java</span>
                                <span class="tech-tag">C</span>
                                <span class="tech-tag">React Native</span>
                                <span class="tech-tag">BigQuery</span>
                                <span class="tech-tag">Arduino IDE</span>
                            </div>
                        </div>
                        
                        <div class="member-card-right">
                            <div class="soft-skills-container">
                                <h3>Competências Profissionais</h3>
                                <div class="tag-container" style="margin-bottom:20px;">
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Engenharia de Software & Scrum</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Lógica de Programação Estruturada</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Engenharia de Dados & Analytics</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Arquitetura & Requisitos</span>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Análise SWOT Individual</h3>
                                <div class="mini-swot-grid">
                                    <div class="mini-swot-card forces">
                                        <h3>Pontos Fortes</h3>
                                        <ul class="mini-swot-list">
                                            <li>Domínio em lógica de programação estruturada</li>
                                            <li>Experiência com organização ágil (Scrum)</li>
                                            <li>Visão analítica de dados e processos</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card weaknesses">
                                        <h3>Pontos Fracos</h3>
                                        <ul class="mini-swot-list">
                                            <li>Pouca experiência em design de produto físico</li>
                                            <li>Fase inicial de aprendizado em robótica</li>
                                            <li>Pouco conhecimento em metodologias de ensino</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card opportunities">
                                        <h3>Oportunidades</h3>
                                        <ul class="mini-swot-list">
                                            <li>Aplicar conceitos do GERSE na startup</li>
                                            <li>Demanda por ensino de lógica sem telas (unplugged)</li>
                                            <li>Editais de extensão e inovação no IFSP</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card threats">
                                        <h3>Ameaças</h3>
                                        <ul class="mini-swot-list">
                                            <li>Tempo dividido entre trabalho, faculdade e GERSE</li>
                                            <li>Concorrência com métodos já bem estabelecidos</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Avaliação de Soft Skills</h3>
                                <div class="soft-skills-grid">
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Boa comunicação</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Facilitar as cerimônias de Scrum</li><li>Estudar didática infantil</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Dinamismo</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Manter o backlog da equipe atualizado</li><li>Aplicar entregas em Sprints</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Flexibilidade</span><span class="skill-value">7/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 70%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Adaptar lógicas de software para o mundo físico</li><li>Ouvir as limitações técnicas do time de hardware</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Mão na Massa</span><span class="skill-value">7/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 70%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Elaborar fluxogramas do produto</li><li>Entender como prototipar os desafios de lógica</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Relacionamento Interpessoal</span><span class="skill-value">10/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 100%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Constante comunicação com o time</li><li>Realizar sessões de feedback</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Orientação a Resultados</span><span class="skill-value">10/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 100%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Estabelecer indicadores claros de validação</li><li>Definir marcos mensais</li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MEMBER 2: GABRIEL COSTA -->
                    <div id="detail-gabriel-c" class="member-detail-content">
                        <div class="member-card-left">
                            <img src="src/public/img/gabriel.jpeg" alt="Gabriel de Souza Costa">
                            <h2>Gabriel de Souza Costa</h2>
                            <div class="member-role">Desenvolvedor</div>
                            <div class="member-course">Engenharia da Computação</div>
                            <div class="score-badge-circle">Média Soft Skills: 7,6</div>
                            
                            <div class="member-section-title">Perfil Profissional</div>
                            <p class="member-bio">Estudante de Engenharia da Computação com sólido conhecimento em desenvolvimento de software (Java/Spring Boot) e hardware (Verilog/STM32). Experiência na criação de APIs escaláveis, aplicativos mobile e sistemas de automação, com foco em arquiteturas de rastreabilidade e sistemas de gestão.</p>

                            <div class="member-section-title">Responsabilidades</div>
                            <p class="member-responsibilities">Responsável por transpor conceitos de lógica e pensamento computacional para o ambiente físico por meio da computação desplugada. Atua na criação de dinâmicas lúdicas, atividades motoras e jogos que ensinam algoritmos e resolução de problemas sem o uso de telas.</p>

                            <div class="member-section-title">Ferramentas & Stacks</div>
                            <div class="tag-container">
                                <span class="tech-tag">Java</span>
                                <span class="tech-tag">Spring Boot</span>
                                <span class="tech-tag">TypeScript</span>
                                <span class="tech-tag">React Native</span>
                                <span class="tech-tag">C</span>
                                <span class="tech-tag">Verilog</span>
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">Node.js</span>
                                <span class="tech-tag">Laravel</span>
                                <span class="tech-tag">STM32 (Blue Pill)</span>
                                <span class="tech-tag">FPGAs</span>
                                <span class="tech-tag">MySQL</span>
                            </div>
                        </div>
                        
                        <div class="member-card-right">
                            <div class="soft-skills-container">
                                <h3>Competências Profissionais</h3>
                                <div class="tag-container" style="margin-bottom:20px;">
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Desenvolvimento Backend</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Arquitetura de Software</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Sistemas Embarcados</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Lógica de Hardware</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Desenvolvimento Mobile & Web</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Eletrônica Aplicada</span>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Análise SWOT Individual</h3>
                                <div class="mini-swot-grid">
                                    <div class="mini-swot-card forces">
                                        <h3>Pontos Fortes</h3>
                                        <ul class="mini-swot-list">
                                            <li>Perfil Híbrido (Software e Hardware)</li>
                                            <li>Autonomia em Projetos</li>
                                            <li>Foco em Resultados</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card weaknesses">
                                        <h3>Pontos Fracos</h3>
                                        <ul class="mini-swot-list">
                                            <li>Comunicação técnica para leigos</li>
                                            <li>Gestão de Tempo sob múltiplas demandas</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card opportunities">
                                        <h3>Oportunidades</h3>
                                        <ul class="mini-swot-list">
                                            <li>Crescimento do Setor de Tecnologia de Ensino</li>
                                            <li>Expansão de soluções de IoT</li>
                                            <li>Participação em Eventos Acadêmicos e Científicos</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card threats">
                                        <h3>Ameaças</h3>
                                        <ul class="mini-swot-list">
                                            <li>Competitividade do Mercado</li>
                                            <li>Rápida Evolução Tecnológica</li>
                                            <li>Escassez de Componentes de Hardware</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Avaliação de Soft Skills</h3>
                                <div class="soft-skills-grid">
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Mão na Massa</span><span class="skill-value">10/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 100%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Continuar desenvolvendo protótipos funcionais</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Perfil Multidisciplinar</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Aprofundar a integração entre eletrônica e software</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Aprendizado Contínuo</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Manter-se atualizado com novas tecnologias</li><li>Explorar novas tendências de mercado</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Dinamismo</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Manter a agilidade na troca de contextos</li><li>Utilizar metodologias ágeis no dia a dia</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Boa comunicação</span><span class="skill-value">6/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 60%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Praticar a explicação de conceitos complexos</li><li>Documentar seus projetos detalhadamente no GitHub</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Orientação a Resultados</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Definir metas claras para cada Sprint</li><li>Focar na entrega de MVPs (mínimo produto viável)</li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MEMBER 3: GABRIEL FEITOZA -->
                    <div id="detail-gabriel-f" class="member-detail-content">
                        <div class="member-card-left">
                            <img src="src/public/img/feitoza.jpeg" alt="Gabriel Feitoza da Silva">
                            <h2>Gabriel F. da Silva</h2>
                            <div class="member-role">Desenvolvedor</div>
                            <div class="member-course">Engenharia da Computação</div>
                            <div class="score-badge-circle">Média Soft Skills: 7,6</div>
                            
                            <div class="member-section-title">Perfil Profissional</div>
                            <p class="member-bio">Estudante de Engenharia da Computação com sólido conhecimento em desenvolvimento de software (Java/Spring Boot, C, Python) e hardware (Verilog). Possui experiência na estruturação de processos lógicos, APIs escaláveis e sistemas de automação.</p>

                            <div class="member-section-title">Responsabilidades</div>
                            <p class="member-responsibilities">Responsável pelo desenvolvimento da arquitetura lógica e transposição de conceitos de programação para o formato "unplugged". Atua na criação de dinâmicas lúdicas e ferramentas de suporte técnico que viabilizam o ensino de algoritmos de forma tangível, offline e adaptada às diretrizes da instituição.</p>

                            <div class="member-section-title">Ferramentas & Stacks</div>
                            <div class="tag-container">
                                <span class="tech-tag">Java (OOP)</span>
                                <span class="tech-tag">PHP (Laravel)</span>
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">C</span>
                                <span class="tech-tag">Verilog HDL</span>
                                <span class="tech-tag">Arduino</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">WebGL</span>
                                <span class="tech-tag">Git</span>
                            </div>
                        </div>
                        
                        <div class="member-card-right">
                            <div class="soft-skills-container">
                                <h3>Competências Profissionais</h3>
                                <div class="tag-container" style="margin-bottom:20px;">
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Desenvolvimento Backend</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Arquitetura de Software</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Prototipagem de Hardware & Lógica Digital</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Desenvolvimento Web Moderno</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Sistemas Embarcados</span>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Análise SWOT Individual</h3>
                                <div class="mini-swot-grid">
                                    <div class="mini-swot-card forces">
                                        <h3>Pontos Fortes</h3>
                                        <ul class="mini-swot-list">
                                            <li>Domínio de múltiplas linguagens de programação</li>
                                            <li>Perfil autodidata e proativo</li>
                                            <li>Versatilidade técnica (Hardware e Software)</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card weaknesses">
                                        <h3>Pontos Fracos</h3>
                                        <ul class="mini-swot-list">
                                            <li>Falta de experiência em liderança de equipe</li>
                                            <li>Falta de experiência prática no ensino infantil</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card opportunities">
                                        <h3>Oportunidades</h3>
                                        <ul class="mini-swot-list">
                                            <li>Crescimento do ensino de programação no currículo escolar básico</li>
                                            <li>Alta demanda por soluções de letramento sem telas</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card threats">
                                        <h3>Ameaças</h3>
                                        <ul class="mini-swot-list">
                                            <li>Tempo dividido entre faculdade e laboratório GERSE</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Avaliação de Soft Skills</h3>
                                <div class="soft-skills-grid">
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Relacionamento Interpessoal</span><span class="skill-value">10/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 100%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Comunicação aberta e constante com o time</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Boa comunicação</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Estudar didática infantil para as oficinas</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Perfil Multidisciplinar</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Integrar eletrônica (hardware) com conceitos de pedagogia</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Mão na Massa</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Aplicar conhecimento de clean code em projetos autorais</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Flexibilidade</span><span class="skill-value">6/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 60%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Ajustar o projeto às restrições físicas das escolas</li><li>Adaptar a rotina quando surgirem imprevistos</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Orientação a Resultados</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Validar se a ideia lúdica surtiu o efeito esperado</li><li>Manter metas claras para o desenvolvimento do MVP</li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MEMBER 4: LUCAS BENTO -->
                    <div id="detail-lucas" class="member-detail-content">
                        <div class="member-card-left">
                            <img src="src/public/img/lucas.jpeg" alt="Lucas Bento da Silva Batista">
                            <h2>Lucas Bento Batista</h2>
                            <div class="member-role">Desenvolvedor</div>
                            <div class="member-course">Engenharia da Computação</div>
                            <div class="score-badge-circle">Média Soft Skills: 7,5</div>
                            
                            <div class="member-section-title">Perfil Profissional</div>
                            <p class="member-bio">Estudante de Engenharia de Computação com sólida base em desenvolvimento de sistemas, focado na criação de soluções escaláveis e arquitetura de software limpa.</p>

                            <div class="member-section-title">Responsabilidades</div>
                            <p class="member-responsibilities">Definição da arquitetura tecnológica da LandGG, implementação de funcionalidades core e refatoração de código seguindo princípios de Clean Code.</p>

                            <div class="member-section-title">Ferramentas & Stacks</div>
                            <div class="tag-container">
                                <span class="tech-tag">Java</span>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">JavaScript</span>
                                <span class="tech-tag">Verilog</span>
                                <span class="tech-tag">Spring Boot</span>
                                <span class="tech-tag">Maven</span>
                                <span class="tech-tag">Pandas</span>
                                <span class="tech-tag">Bokeh</span>
                                <span class="tech-tag">Jupyter Notebook</span>
                                <span class="tech-tag">Quartus</span>
                                <span class="tech-tag">VS Code</span>
                            </div>
                        </div>
                        
                        <div class="member-card-right">
                            <div class="soft-skills-container">
                                <h3>Competências Profissionais</h3>
                                <div class="tag-container" style="margin-bottom:20px;">
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Análise de Dados</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Desenvolvimento Backend</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Sistemas Embarcados</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Qualidade de Software</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Automação de Processos</span>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Análise SWOT Individual</h3>
                                <div class="mini-swot-grid">
                                    <div class="mini-swot-card forces">
                                        <h3>Pontos Fortes</h3>
                                        <ul class="mini-swot-list">
                                            <li>Domínio em múltiplas linguagens</li>
                                            <li>Foco em qualidade de código (Clean Code)</li>
                                            <li>Versatilidade Hardware-Software</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card weaknesses">
                                        <h3>Pontos Fracos</h3>
                                        <ul class="mini-swot-list">
                                            <li>Dispersão de foco entre muitas áreas distintas</li>
                                            <li>Gestão de tempo sob pressão extrema</li>
                                            <li>Pouca experiência em projetos de extensão comercial</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card opportunities">
                                        <h3>Oportunidades</h3>
                                        <ul class="mini-swot-list">
                                            <li>Alta demanda de mercado por perfis técnicos híbridos</li>
                                            <li>Expansão de plataformas para soluções mistas</li>
                                            <li>Automação de processos internos da startup</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card threats">
                                        <h3>Ameaças</h3>
                                        <ul class="mini-swot-list">
                                            <li>Concorrência no mercado de soluções digitais</li>
                                            <li>Rápida evolução e obsolescência tecnológica</li>
                                            <li>Escalabilidade na gestão técnica da equipe</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Avaliação de Soft Skills</h3>
                                <div class="soft-skills-grid">
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Mão na Massa</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Desenvolver projetos práticos reais</li><li>Focar na implementação além da teoria acadêmica</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Aprendizado Contínuo</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Estudar constantemente novas bibliotecas e frameworks</li><li>Integrar conceitos de estatística em projetos reais</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Dinamismo</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Unir programação e processamento de áudio</li><li>Estabelecer metas curtas de entrega</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Flexibilidade</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Estudar frameworks fora da sua zona de conforto</li><li>Adaptar estratégias de estudo rapidamente</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Visão de Negócio</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Analisar dados de vendas para prever demandas</li><li>Mapear custos operacionais para otimizar lucros</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Boa comunicação</span><span class="skill-value">6/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 60%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Liderar apresentações universitárias</li><li>Explicar conceitos técnicos complexos para leigos</li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MEMBER 5: MARIA EDUARDA -->
                    <div id="detail-maria" class="member-detail-content">
                        <div class="member-card-left">
                            <img src="src/public/img/duda.jpeg" alt="Maria Eduarda Alves Selvatti">
                            <h2>Maria E. A. Selvatti</h2>
                            <div class="member-role" style="font-size:0.8rem;">Scrum Master Suplente</div>
                            <div class="member-course">Engenharia da Computação</div>
                            <div class="score-badge-circle">Média Soft Skills: 7,5</div>
                            
                            <div class="member-section-title">Perfil Profissional</div>
                            <p class="member-bio">Estudante de Engenharia da Computação (7º semestre) no IFSP Câmpus Guarulhos com foco em liderança ágil e desenvolvimento de software. Atua como Scrum Master Suplente na startup acadêmica LANDGG Technology, liderando a transformação da lógica de programação em métodos acessíveis e desplugados para o público infantil. Integrante do Laboratório Oficinas 4.0, desenvolve sua segunda Iniciação Científica com foco em Arquitetura de Software e possui experiência prática em desenvolvimento Mobile e Web.</p>

                            <div class="member-section-title">Responsabilidades</div>
                            <p class="member-responsibilities">Auxiliar na liderança da equipe de 6 integrantes, garantir que os valores de educação com propósito sejam seguidos e apoiar o desenvolvimento técnico da solução proposta.</p>

                            <div class="member-section-title">Ferramentas & Stacks</div>
                            <div class="tag-container">
                                <span class="tech-tag">Scrum</span>
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Mobile Dev</span>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">SQL</span>
                                <span class="tech-tag">Java</span>
                                <span class="tech-tag">C</span>
                                <span class="tech-tag">Arduino IDE</span>
                            </div>
                        </div>
                        
                        <div class="member-card-right">
                            <div class="soft-skills-container">
                                <h3>Competências Profissionais</h3>
                                <div class="tag-container" style="margin-bottom:20px;">
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Engenharia de Software & Scrum</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Desenvolvimento Mobile & Web</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Lógica de Programação Estruturada</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Arquitetura & Requisitos</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Pesquisa & Inovação</span>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Análise SWOT Individual</h3>
                                <div class="mini-swot-grid">
                                    <div class="mini-swot-card forces">
                                        <h3>Pontos Fortes</h3>
                                        <ul class="mini-swot-list">
                                            <li>Liderança em métodos ágeis (Scrum Master Suplente)</li>
                                            <li>Domínio técnico em lógica de programação estruturada</li>
                                            <li>Experiência com pesquisa científica e escrita</li>
                                            <li>Habilidade em colaboração e alinhamento de equipe</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card weaknesses">
                                        <h3>Pontos Fracos</h3>
                                        <ul class="mini-swot-list">
                                            <li>Experiência profissional concentrada no meio acadêmico</li>
                                            <li>Desafio na gestão do tempo entre IC, faculdade e startup</li>
                                            <li>Pouca base teórica em metodologias de ensino infantil</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card opportunities">
                                        <h3>Oportunidades</h3>
                                        <ul class="mini-swot-list">
                                            <li>Alta demanda por letramento digital sem telas (unplugged)</li>
                                            <li>Aplicar em tempo real os conceitos aprendidos em aula</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card threats">
                                        <h3>Ameaças</h3>
                                        <ul class="mini-swot-list">
                                            <li>Sobrecarga acadêmica (faculdade, IC e LANDGG)</li>
                                            <li>Equipe ainda iniciante no assunto de pedagogia prática</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Avaliação de Soft Skills</h3>
                                <div class="soft-skills-grid">
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Orientação a Resultados</span><span class="skill-value">10/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 100%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Estabelecer métricas para validar o impacto social</li><li>Priorizar funcionalidades críticas do MVP</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Flexibilidade</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Adaptar lógicas de software complexas para o unplugged</li><li>Implementar novas ferramentas tecnológicas de apoio</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Relacionamento Interpessoal</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Realizar sessões periódicas de feedback com os 6 membros</li><li>Colaborar em revisões de código (Code Reviews)</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Boa comunicação</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Facilitar as reuniões de Scrum para alinhar o time</li><li>Documentar detalhadamente a lógica de sistemas</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Dinamismo</span><span class="skill-value">7/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 70%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Manter o backlog sempre atualizado com as metas da semana</li><li>Resolver bugs lógicos do projeto de forma ágil</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Mão na Massa</span><span class="skill-value">7/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 70%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Desenvolver protótipos físicos para lógica infantil</li><li>Trabalhar firmemente no cronograma estipulado</li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MEMBER 6: NATHALIE XAVIER -->
                    <div id="detail-nathalie" class="member-detail-content">
                        <div class="member-card-left">
                            <img src="src/public/img/nath.jpeg" alt="Nathalie Gonçalves Xavier">
                            <h2>Nathalie G. Xavier</h2>
                            <div class="member-role">Scrum Master</div>
                            <div class="member-course">Engenharia da Computação</div>
                            <div class="score-badge-circle">Média Soft Skills: 7,9</div>
                            
                            <div class="member-section-title">Perfil Profissional</div>
                            <p class="member-bio">Estudante de Engenharia da Computação e atualmente trabalha com infraestrutura de banco de dados e segurança da informação em ambientes de Cloud. Possui forte interesse em gestão de pessoas e liderança. No projeto da startup, atua como facilitadora, garantindo a organização e a fluidez do trabalho. Sua experiência prévia como professora de inglês proporcionou didática e comunicação essenciais para traduzir a lógica da engenharia para o ensino de pensamento computacional desplugado para crianças.</p>

                            <div class="member-section-title">Responsabilidades</div>
                            <p class="member-responsibilities">Garantir a aplicação das práticas ágeis, facilitando a comunicação e removendo impedimentos do time. Organizar o fluxo de trabalho, documentação e tarefas. Apoiar o time na adaptação pedagógica dos conceitos técnicos para o público infantil (até 9 anos). Fazer a ponte entre requisitos pedagógicos e a execução técnica.</p>

                            <div class="member-section-title">Ferramentas & Stacks</div>
                            <div class="tag-container">
                                <span class="tech-tag">Notion</span>
                                <span class="tech-tag">Trello</span>
                                <span class="tech-tag">Jira</span>
                                <span class="tech-tag">AWS Cloud</span>
                                <span class="tech-tag">Git / GitHub</span>
                                <span class="tech-tag">DB Infra</span>
                                <span class="tech-tag">Security</span>
                            </div>
                        </div>
                        
                        <div class="member-card-right">
                            <div class="soft-skills-container">
                                <h3>Competências Profissionais</h3>
                                <div class="tag-container" style="margin-bottom:20px;">
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Gestão Ágil & Facilitação de Equipes</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Didática & Ensino</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Banco de Dados & Cloud Computing</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Segurança da Informação</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Desenvolvimento Multiplataforma (Básico)</span>
                                    <span class="tech-tag" style="border-color:var(--roxo-claro);">Planejamento & Estruturação de Processos</span>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Análise SWOT Individual</h3>
                                <div class="mini-swot-grid">
                                    <div class="mini-swot-card forces">
                                        <h3>Pontos Fortes</h3>
                                        <ul class="mini-swot-list">
                                            <li>Perfil técnico multidisciplinar abrangente</li>
                                            <li>Forte didática e facilidade de comunicação com crianças</li>
                                            <li>Alta capacidade de organização e processos</li>
                                            <li>Interesse genuíno em liderança e gestão de pessoas</li>
                                            <li>Tradução de requisitos pedagógicos para desenvolvimento</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card weaknesses">
                                        <h3>Pontos Fracos</h3>
                                        <ul class="mini-swot-list">
                                            <li>Tendência a focar na execução técnica e desviar da gestão</li>
                                            <li>Necessidade de aprofundamento em pedagogia infantil</li>
                                            <li>Conciliar tempo (trabalho, faculdade e extensão)</li>
                                            <li>Sobrecarga ao assumir impedimentos do time</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card opportunities">
                                        <h3>Oportunidades</h3>
                                        <ul class="mini-swot-list">
                                            <li>Alta demanda por letramento digital infantil sem telas</li>
                                            <li>Expansão do projeto para outras escolas ou ONGs</li>
                                            <li>Portfólio prático de liderança e impacto social</li>
                                            <li>Networking com profissionais de educação e tecnologia</li>
                                        </ul>
                                    </div>
                                    <div class="mini-swot-card threats">
                                        <h3>Ameaças</h3>
                                        <ul class="mini-swot-list">
                                            <li>Expectativa frustrada de pais que esperam telas</li>
                                            <li>Rigidez nas diretrizes pedagógicas de escolas parceiras</li>
                                            <li>Desgaste e custo de reposição de materiais físicos</li>
                                            <li>Espaço limitado na grade escolar para oficinas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="soft-skills-container">
                                <h3>Avaliação de Soft Skills</h3>
                                <div class="soft-skills-grid">
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Perfil Multidisciplinar</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Aplicar engenharia e tecnologia na didática de ensino</li><li>Compartilhar boas práticas de cloud e infra com o time</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Aprendizado Contínuo</span><span class="skill-value">9/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 90%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Estudar as diretrizes da BNCC para primeira infância</li><li>Buscar certificações em facilitação e agilidade</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Boa comunicação</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Adaptar o linguajar técnico para um lúdico infantil</li><li>Praticar escuta ativa em reuniões ágeis</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Dinamismo</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Promover "quebra-gelos" rápidos no início de reuniões</li><li>Testar novas dinâmicas práticas nas oficinas desplugadas</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Flexibilidade</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Adaptar dinâmicas que não performem bem em sala</li><li>Readequar backlogs com base em impedimentos técnicos</li></ul></div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info"><span class="skill-name">Senso de Dono & Empreendedorismo</span><span class="skill-value">8/10</span></div>
                                        <div class="skill-progress-bg"><div class="skill-progress-bar" style="width: 80%;"></div></div>
                                        <div class="skill-actions"><strong>Ações de melhoria/manutenção:</strong><ul><li>Tratar a extensão acadêmica como startup sustentável</li><li>Buscar parcerias ativas para viabilizar oficinas</li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>

<script>
function switchMainTab(tabName) {
    // Hide all main tab contents
    document.getElementById('tab-content-startup').classList.remove('active');
    document.getElementById('tab-content-team').classList.remove('active');
    
    // Deactivate all buttons
    document.getElementById('btn-tab-startup').classList.remove('active');
    document.getElementById('btn-tab-team').classList.remove('active');
    
    // Activate target
    if(tabName === 'startup') {
        document.getElementById('tab-content-startup').classList.add('active');
        document.getElementById('btn-tab-startup').classList.add('active');
    } else {
        document.getElementById('tab-content-team').classList.add('active');
        document.getElementById('btn-tab-team').classList.add('active');
    }
}

function selectMember(memberId) {
    // Deactivate all selectors
    const selectors = document.querySelectorAll('.member-selector');
    selectors.forEach(sel => sel.classList.remove('active'));
    
    // Deactivate all detail divs
    const details = document.querySelectorAll('.member-detail-content');
    details.forEach(det => det.classList.remove('active'));
    
    // Activate target selector and details div
    document.getElementById('sel-' + memberId).classList.add('active');
    document.getElementById('detail-' + memberId).classList.add('active');
}
</script>

<?php include_once 'src/components/footer.php'; ?>
