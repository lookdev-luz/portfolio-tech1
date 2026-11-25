# Cyber Developer — portfólio PHP

Portfólio demonstrativo em PHP convencional, HTML, CSS e JavaScript nativo. Não usa Node.js, Composer, banco de dados, frameworks ou etapas de compilação. Os textos, contatos e projetos da configuração atual são exemplos. Substitua os dados antes de divulgar o site.

## Estrutura

- `index.php`: entrada da aplicação, configuração, escape HTML e validação de URLs.
- `config/portfolio.php`: conteúdo editável, contatos, tecnologias, serviços, projetos e SEO.
- `includes/` e `sections/`: componentes e conteúdo da página.
- `assets/`: CSS, JavaScript e favicon, todos locais ao projeto.
- `robots.txt`: permite rastreamento, enquanto a página define `noindex` por meta tag.

Os caminhos dos includes PHP usam `__DIR__`. Os assets usam caminhos relativos à raiz pública do projeto. Portanto, mantenha a estrutura completa dentro da raiz `public_html` do domínio.

## Requisitos

- PHP 7.4 ou superior recomendado. O código usa sintaxe tipada e arrow functions compatíveis com PHP 7.4.
- Extensões padrão `filter` e `json` habilitadas.
- Apache ou Nginx configurado pelo HestiaCP com PHP-FPM.
- Permissão de leitura para o usuário do site nos arquivos e pastas. O site não grava arquivos, então não precisa de permissão de escrita em `public_html`.

Não execute `npm install`, `composer install` ou comandos de compilação. Para uma instalação de hospedagem comum, os arquivos podem ser servidos diretamente.

## 1. Clonar o repositório

Em seu computador ou na conta de usuário da VPS, clone o repositório em um diretório de trabalho:

```bash
git clone https://github.com/lookdev-luz/portfolio-tech1.git
cd portfolio-tech1
```

Para uma cópia privada, use o mecanismo de autenticação Git configurado para sua conta. Não coloque tokens ou senhas na URL do remoto, em scripts ou neste repositório.

## 2. Executar localmente

Com PHP 8.0 ou superior instalado, execute na raiz clonada:

```bash
php -S 127.0.0.1:8000
```

Abra `http://127.0.0.1:8000`. O servidor embutido do PHP é para desenvolvimento local, não para servir o site na VPS.

## 3. Personalizar os dados

Edite `config/portfolio.php`:

- Atualize nome, cargo, biografia e localização.
- Informe um e-mail válido, telefone e WhatsApp com código do país. O WhatsApp deve conter apenas dígitos.
- Configure o nome de usuário ou URL pública do GitHub e, se desejar, o perfil do LinkedIn.
- Revise disponibilidade, tecnologias, serviços, projetos e textos de SEO.
- Mantenha `indexable` como `false` enquanto houver informações demonstrativas. Os links com domínios e números de exemplo são intencionalmente ocultados.
- Ao publicar com indexação habilitada, configure também `canonical` com a URL HTTPS definitiva.

As URLs de demonstração e repositório dos projetos devem apontar para destinos reais. Os estudos atuais não representam trabalho para clientes.

## 4. Publicar em `public_html`

No HestiaCP, crie ou selecione o domínio na conta de usuário individual. A raiz web normalmente fica em `~/web/SEU_DOMINIO/public_html`. Confirme o caminho real no painel ou na estrutura da conta.

Coloque o conteúdo do projeto diretamente em `public_html`, de modo que `index.php` fique na raiz e as pastas `assets`, `config`, `includes` e `sections` permaneçam ao lado dele. Se optar por manter o clone numa subpasta, mova seu conteúdo para a raiz pública ou configure o document root no painel para essa subpasta.

Configure o domínio no painel para usar uma versão PHP 8.0 ou superior com PHP-FPM. Nginx e Apache gerenciados pelo HestiaCP suportam este projeto sem regras específicas de rewrite. O Nginx pode servir os assets estáticos e encaminhar `index.php` ao PHP-FPM conforme a configuração administrada pelo painel.

Permissões típicas são diretórios `755` e arquivos `644`, pertencentes ao usuário da conta do domínio. Não use `777`. O projeto não precisa de permissões de escrita, acesso root, alterações globais do servidor, banco de dados ou tarefas cron. Não publique arquivos `.env`, chaves privadas, dumps, logs ou cópias de backup.

## 5. Atualizar usando Git

Se o clone estiver em um diretório de trabalho separado:

```bash
cd ~/portfolio-tech1
git pull --ff-only origin main
```

Depois publique os arquivos atualizados para `public_html` pelo gerenciador de arquivos/SFTP, ou mantenha um clone Git diretamente em `public_html` se isso fizer parte do seu fluxo e a pasta `.git` não for servida publicamente pelo servidor. Para um clone diretamente na raiz pública, atualize com:

```bash
cd ~/web/SEU_DOMINIO/public_html
git pull --ff-only origin main
```

Use `git status` antes de atualizar para verificar alterações locais. Preserve seu `config/portfolio.php` personalizado. Se ele tiver alterações locais, faça backup seguro e integre-as conscientemente antes de puxar atualizações. Nunca armazene credenciais de acesso no repositório.

## 6. Configurar o domínio

No HestiaCP, adicione o domínio à conta de usuário e aponte os registros DNS `A`/`AAAA` para a VPS. Aguarde a propagação DNS. Confirme que o domínio usa a raiz `public_html` correta, que `index.php` é reconhecido como índice e que o seletor PHP está configurado para a versão compatível.

O projeto não exige configuração global, `.htaccess` especial nem arquivo de regras Nginx personalizado. Se o HestiaCP oferecer configuração Apache/Nginx por domínio, mantenha as diretivas geradas pelo painel.

## 7. Habilitar HTTPS pelo HestiaCP

Depois que o domínio resolver para a VPS, abra a configuração Web do domínio no HestiaCP, habilite SSL e solicite o certificado Let's Encrypt pelo próprio painel. Selecione o redirecionamento para HTTPS, quando disponível. Não altere configurações globais nem instale certificados como root para este projeto.

Após ativar o certificado, teste `https://SEU_DOMINIO`, o redirecionamento HTTP para HTTPS e o carregamento de CSS, JavaScript e favicon. O site não usa URLs absolutas HTTP para seus próprios assets.

## 8. Habilitar indexação após personalizar

Antes de indexar, substitua todos os dados demonstrativos, confirme que os canais de contato funcionam, revise os projetos e publique sob domínio HTTPS definitivo. Em `config/portfolio.php`, configure `canonical` e defina `indexable` como `true`.

`robots.txt` já permite rastreamento. Quando `indexable` for `false`, a página envia `noindex, nofollow` e `googlebot noindex`. Quando todos os dados estiverem prontos, alterar a configuração removerá essas diretivas. Depois, confirme title, descrição, canonical e dados estruturados Person no HTML gerado.

## Segurança, comportamento e limitações

- Conteúdo dinâmico é escapado com `htmlspecialchars`; links externos são filtrados e usam `rel="noopener noreferrer"` quando abrem nova aba.
- O terminal é uma simulação local e não executa comandos do sistema.
- O formulário prepara uma mensagem contextual para WhatsApp, sem armazenar ou enviar dados antes da pessoa confirmar. Se WhatsApp não estiver configurado e houver e-mail válido, prepara uma mensagem de e-mail.
- As fontes Google Fonts são uma requisição externa opcional, com alternativas locais do sistema. Para uma política de rede sem terceiros, remova o `@import` em `assets/css/main.css`.
- Com JavaScript desativado, o conteúdo e os links permanecem acessíveis, mas menu compacto, filtros, terminal e montagem do formulário não funcionam.
- O projeto não envia e-mail pelo servidor nem inclui uma área administrativa.
