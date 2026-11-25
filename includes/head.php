<!doctype html>
<html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($config['seo']['title']) ?></title><meta name="description" content="<?= e($config['seo']['description']) ?>">
<?php if (!$config['indexable']): ?><meta name="robots" content="noindex, nofollow"><meta name="googlebot" content="noindex, nofollow"><?php endif; ?>
<meta property="og:type" content="website"><meta property="og:locale" content="pt_BR"><meta property="og:title" content="<?= e($config['seo']['title']) ?>"><meta property="og:description" content="<?= e($config['seo']['description']) ?>">
<?php if ($canonical): ?><link rel="canonical" href="<?= e($canonical) ?>"><meta property="og:url" content="<?= e($canonical) ?>"><?php endif; ?>
<link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg"><link rel="stylesheet" href="assets/css/main.css"><link rel="stylesheet" href="assets/css/components.css"><link rel="stylesheet" href="assets/css/animations.css"><link rel="stylesheet" href="assets/css/responsive.css">
<script type="application/ld+json"><?= json_encode($person, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS|JSON_HEX_QUOT) ?></script><script defer src="assets/js/main.js"></script></head><body>
<div class="reading-progress" aria-hidden="true"></div><a class="skip-link" href="#conteudo">Pular para o conteúdo</a>
