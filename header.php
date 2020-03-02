<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo("charset") ?>">
<link rel="stylesheet" href="<?= get_stylesheet_uri() ?>">
<title><?php bloginfo("name")?></title>
<?php wp_head()?>
</head>
<body>
<div id="container">
  <header>
    <h1>
      <a href="<?= home_url() ?>"><?php bloginfo("name")?></a>
      <span><?php bloginfo("description")?></span>
    </h1>
  </header>
  <nav id="global">
    <?php wp_nav_menu(["container" => false]) ?>
  </nav>
  <main>
    <div id="contents">
