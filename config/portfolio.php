<?php
declare(strict_types=1);

// Conteúdo demonstrativo. Substitua os dados antes de publicar.
return [
    'full_name' => 'Alex Silva (exemplo)', 'name' => 'Alex Silva', 'role' => 'Desenvolvedor Web em formação',
    'description' => 'Desenvolvimento web cuidadoso para transformar ideias em experiências digitais úteis.',
    'bio' => 'Sou uma pessoa em início de carreira, curiosa por tecnologia e motivada por resolver problemas com software. Este portfólio demonstra como apresento estudos e projetos autorais.',
    'email' => 'contato@exemplo.com', 'phone' => '+55 11 90000-0000', 'whatsapp' => '5511900000000',
    'github_user' => 'seuusuario', 'github_url' => '', 'linkedin_url' => '', 'location' => 'São Paulo, SP (exemplo)',
    'available' => true, 'indexable' => false, 'canonical' => '',
    'technologies' => [
        ['name'=>'PHP','icon'=>'php','description'=>'Lógica de servidor e páginas dinâmicas.'], ['name'=>'HTML5','icon'=>'html','description'=>'Estrutura semântica e acessível.'],
        ['name'=>'CSS3','icon'=>'css','description'=>'Interfaces responsivas e consistentes.'], ['name'=>'JavaScript','icon'=>'js','description'=>'Interações úteis sem dependências.'],
        ['name'=>'MySQL','icon'=>'db','description'=>'Persistência e organização de dados.'], ['name'=>'Git','icon'=>'git','description'=>'Controle de versão e histórico.'],
        ['name'=>'GitHub','icon'=>'gh','description'=>'Hospedagem de código e colaboração.'], ['name'=>'SQL','icon'=>'sql','description'=>'Consultas e modelagem relacional.'], ['name'=>'Linux','icon'=>'linux','description'=>'Ambiente de desenvolvimento e servidores.'],
    ],
    'services' => [
        ['enabled'=>true,'icon'=>'⌘','name'=>'Sites institucionais','description'=>'Uma presença digital clara, responsiva e alinhada ao objetivo do negócio.'],
        ['enabled'=>true,'icon'=>'↗','name'=>'Landing pages','description'=>'Páginas focadas em apresentar uma oferta e facilitar o próximo passo.'],
        ['enabled'=>true,'icon'=>'{ }','name'=>'Sistemas web','description'=>'Ferramentas sob medida para organizar fluxos e informações.'],
        ['enabled'=>true,'icon'=>'⚙','name'=>'Backend e integrações','description'=>'Regras de negócio, processamento e integração entre serviços.'],
        ['enabled'=>true,'icon'=>'▤','name'=>'Dados e manutenção','description'=>'Modelagem, correções e melhorias evolutivas em aplicações existentes.'],
    ],
    'projects' => [
        ['name'=>'Painel de estudos','category'=>'Estudo','description'=>'Projeto conceitual para explorar organização de informações e interfaces de dashboard. Exemplo demonstrativo, sem cliente real.','technologies'=>['PHP','CSS','JavaScript'],'image'=>'','demo'=>'','repo'=>''],
        ['name'=>'Página de apresentação','category'=>'Interface','description'=>'Exercício de layout responsivo com foco em hierarquia de conteúdo e acessibilidade. Exemplo demonstrativo.','technologies'=>['HTML5','CSS3'],'image'=>'','demo'=>'','repo'=>''],
        ['name'=>'Organizador de tarefas','category'=>'Estudo','description'=>'Estudo de uma interface para acompanhar tarefas e estados de um fluxo simples. Exemplo demonstrativo.','technologies'=>['PHP','MySQL'],'image'=>'','demo'=>'','repo'=>''],
    ],
    'seo' => ['title'=>'Cyber Developer | Portfólio','description'=>'Portfólio demonstrativo de desenvolvimento web.'],
];
