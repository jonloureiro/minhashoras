<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ($this->e($no_cache)): ?>
  <meta name="turbolinks-cache-control" content="no-cache">
<?php endif ?>
  <link rel="stylesheet" href="<?= $this->e($assets) ?>css/sanitize.css">
  <link rel="stylesheet" href="<?= $this->e($assets) ?>css/forms.css">
  <link rel="stylesheet" href="<?= $this->e($assets) ?>css/typography.css">
  <link rel="stylesheet" href="<?= $this->e($assets) ?>css/style.css">
<?php foreach ($stylesheets as $stylesheet): ?>
  <link rel="stylesheet" href="<?= $this->e($assets) . $stylesheet ?>">
<?php endforeach ?>
  <title><?= $this->e($title) ?></title>
  <script src="<?= $this->e($assets) ?>js/turbolinks.min.js"></script>
</head>
<body id="body">

<?= $this->section('content') ?>

<footer>
  <div>Copyright &copy;
    <a class="footer__link" href="https://github.com/jonloureiro" target="_blank">
      github/jonloureiro
    </a>
  </div>
</footer>

</body>
</html>
