<?php
declare(strict_types=1);
$config = require __DIR__ . '/config/portfolio.php';
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function safe_url(string $url): string { return filter_var($url, FILTER_VALIDATE_URL) && in_array(strtolower((string)parse_url($url, PHP_URL_SCHEME)), ['https','http'], true) ? $url : ''; }
function icon(string $name): string { $icons=['php'=>'php','html'=>'5','css'=>'3','js'=>'JS','db'=>'DB','git'=>'⌘','gh'=>'GH','sql'=>'SQL','linux'=>'LX']; return $icons[$name] ?? '✳'; }
$github = safe_url((string)$config['github_url']); if (!$github && preg_match('/^[A-Za-z0-9-]{1,39}$/', (string)$config['github_user'])) $github='https://github.com/'.rawurlencode((string)$config['github_user']);
$linkedin = safe_url((string)$config['linkedin_url']); $canonical=safe_url((string)$config['canonical']);
$emailIsExample = str_contains(strtolower((string)$config['email']), 'exemplo.com');
$phoneDigits = preg_replace('/\D/', '', (string)$config['phone']);
$phoneIsExample = $phoneDigits === '5511900000000';
$whatsappIsExample = (string)$config['whatsapp'] === '5511900000000';
$githubIsExample = (string)$config['github_user'] === 'seuusuario' && $config['github_url'] === '';
$emailHref = $emailIsExample ? '' : 'mailto:' . $config['email'];
$phoneHref = !$phoneIsExample && preg_match('/^[+0-9 ().-]{8,24}$/', (string)$config['phone']) ? 'tel:' . preg_replace('/[^+0-9]/', '', (string)$config['phone']) : '';
$whatsappNumber = !$whatsappIsExample && preg_match('/^[0-9]{10,15}$/', (string)$config['whatsapp']) ? (string)$config['whatsapp'] : '';
$github = $githubIsExample ? '' : $github;
$linkedin = $linkedin ?: '';
$services=array_values(array_filter($config['services'], fn($s)=>!empty($s['enabled'])));
$projects=$config['projects']; $categories=array_values(array_unique(array_column($projects,'category')));
$person=['@context'=>'https://schema.org','@type'=>'Person','name'=>$config['full_name'],'jobTitle'=>$config['role'],'description'=>$config['description'],'address'=>['@type'=>'PostalAddress','addressLocality'=>$config['location']]];
if ($github) $person['sameAs'][]=$github; if ($linkedin) $person['sameAs'][]=$linkedin;
require __DIR__.'/includes/head.php'; require __DIR__.'/includes/header.php';
?>
<main id="conteudo">
<?php require __DIR__.'/sections/hero.php'; require __DIR__.'/sections/about.php'; require __DIR__.'/sections/skills.php'; require __DIR__.'/sections/services.php'; require __DIR__.'/sections/projects.php'; require __DIR__.'/sections/process.php'; require __DIR__.'/sections/contact.php'; ?>
</main>
<?php require __DIR__.'/includes/footer.php'; ?>
