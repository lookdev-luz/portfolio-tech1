# Cyber Developer — portfólio demonstrativo

Portfólio PHP simples, sem dependências de build, preparado para hospedagem PHP convencional. Todo o conteúdo visível está em português brasileiro. Os dados de identidade e os projetos atuais são exemplos e devem ser personalizados antes da publicação.

## Estrutura

- `index.php`: composição da página, escape de saída e validação das URLs.
- `config/portfolio.php`: dados, serviços, tecnologias, projetos e SEO.
- `includes/`: metadados, cabeçalho e rodapé.
- `sections/`: seções da página.
- `assets/css/`: estilos base, componentes, animações e responsividade.
- `assets/js/main.js`: interações locais do navegador.

## Executar localmente

Requer PHP 7.4 ou superior. No diretório do projeto, execute `php -S localhost:8000` e abra `http://localhost:8000`. O servidor embutido do PHP serve apenas para desenvolvimento. Em produção use um domínio configurado no HestiaCP com suporte a PHP.

## Personalizar dados e contatos

Edite `config/portfolio.php`. Troque nome, cargo, biografia, localização e descrição SEO. Configure e valide e-mail, telefone e WhatsApp. O número do WhatsApp deve conter apenas dígitos, incluindo código do país. O GitHub pode ser configurado com o usuário ou URL completa. URLs externas são aceitas somente com HTTP ou HTTPS. LinkedIn é opcional. Os valores de exemplo (`contato@exemplo.com`, telefone/WhatsApp fictícios e usuário `seuusuario`) não geram links ativos. Substitua cada valor pelo canal que você realmente utiliza antes de divulgar o portfólio.

Os dados são demonstrativos. Use `available` para indicar disponibilidade e `indexable` para controlar a indexação. O canonical precisa ser uma URL absoluta válida.

## Tecnologias, serviços e projetos

Adicione tecnologias ao array `technologies` com `name`, `icon` e `description`. Os ícones são monogramas locais, sem bibliotecas externas. Para serviços, configure `enabled`, `icon`, `name` e `description`; serviços desativados não aparecem no site nem no formulário de contato.

Cada projeto usa `name`, `category`, `description`, `technologies`, `image`, `demo` e `repo`. Links de demo e repositório ficam ocultos quando vazios ou inválidos. As ilustrações atuais são CSS locais. Não atribua trabalhos fictícios a clientes reais.

## HestiaCP e indexação

Envie os arquivos para a raiz web do domínio no HestiaCP, mantendo a estrutura de pastas. Confirme que o domínio usa uma versão PHP compatível e que `index.php` está habilitado como índice padrão. Não são necessárias etapas de compilação, banco de dados ou instalação de pacotes.

Enquanto o conteúdo for demonstrativo, `indexable` permanece `false` e a página envia `noindex, nofollow`. Antes de permitir indexação, substitua os dados, defina uma URL canonical HTTPS em `canonical`, revise SEO e altere `indexable` para `true`. Atualize `robots.txt` para permitir rastreamento quando fizer isso. O arquivo atual bloqueia rastreadores como precaução para o conteúdo de exemplo.

## Conversão e interações

Os textos apresentam serviços em termos do que podem ajudar o negócio a fazer, sem prometer resultados. Os links de cada serviço levam ao pedido de orçamento e selecionam a categoria correspondente. A mensagem preparada no WhatsApp contextualiza o tipo de serviço e pode ser revisada antes do envio. Se o WhatsApp não estiver configurado e houver um e-mail real válido, o formulário prepara uma mensagem de e-mail como alternativa. Nenhuma mensagem é enviada automaticamente.

## Limitações

O terminal é uma simulação frontend local, sem comandos de sistema. O formulário de orçamento prepara uma mensagem e abre o WhatsApp, sem armazenar dados. Sem WhatsApp configurado, o formulário orienta a usar e-mail. O site usa Google Fonts como melhoria opcional, com fontes de sistema como fallback. Com JavaScript desativado, o conteúdo continua visível, mas filtros, terminal, menu compacto e formulário não funcionam.
