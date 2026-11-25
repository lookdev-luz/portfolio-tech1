<?php
declare(strict_types=1);

// Conteúdo demonstrativo. Substitua os dados antes de publicar.
return [
    'full_name' => 'Alex Silva (exemplo)', 'name' => 'Alex Silva', 'role' => 'Desenvolvedor Web em formação',
    'description' => 'Sites e sistemas web feitos sob medida para ajudar pequenos negócios a apresentar seus serviços, organizar informações e simplificar tarefas.',
    'bio' => 'Estou no início da minha trajetória em desenvolvimento de software e gosto de entender como cada negócio funciona antes de pensar na solução. Trabalho em projetos autorais e estudos, com atenção à comunicação, à clareza e a ferramentas que sejam simples de usar.',
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
        ['enabled'=>true,'icon'=>'⌘','name'=>'Sites para negócios','description'=>'Apresente sua empresa, seus serviços e formas de contato em um site claro, adaptado para celular e fácil de navegar.'],
        ['enabled'=>true,'icon'=>'↗','name'=>'Páginas de divulgação','description'=>'Explique uma oferta, serviço ou evento em uma página objetiva, com um caminho simples para o cliente entrar em contato.'],
        ['enabled'=>true,'icon'=>'{ }','name'=>'Sistemas web personalizados','description'=>'Organize informações e rotinas do seu negócio em uma ferramenta pensada para as necessidades do seu dia a dia.'],
        ['enabled'=>true,'icon'=>'⚙','name'=>'Automatizações e integrações','description'=>'Reduza tarefas repetitivas conectando etapas e ferramentas, conforme a viabilidade do seu projeto.'],
        ['enabled'=>true,'icon'=>'▤','name'=>'Manutenção e melhorias','description'=>'Revise um site ou sistema existente, corrija problemas e planeje melhorias com escopo combinado.'],
    ],
    'projects' => [
        ['name'=>'Painel de estudos','category'=>'Estudo','description'=>'Projeto conceitual para explorar organização de informações e interfaces de dashboard. Exemplo demonstrativo, sem cliente real.','technologies'=>['PHP','CSS','JavaScript'],'image'=>'','demo'=>'','repo'=>''],
        ['name'=>'Página de apresentação','category'=>'Interface','description'=>'Exercício de layout responsivo com foco em hierarquia de conteúdo e acessibilidade. Exemplo demonstrativo.','technologies'=>['HTML5','CSS3'],'image'=>'','demo'=>'','repo'=>''],
        ['name'=>'Organizador de tarefas','category'=>'Estudo','description'=>'Estudo de uma interface para acompanhar tarefas e estados de um fluxo simples. Exemplo demonstrativo.','technologies'=>['PHP','MySQL'],'image'=>'','demo'=>'','repo'=>''],
    ],
    'seo' => ['title'=>'Cyber Developer | Sites e sistemas web sob medida','description'=>'Desenvolvimento de sites e sistemas web para pequenos negócios. Converse sobre sua necessidade e receba uma proposta com escopo combinado.'],
];
