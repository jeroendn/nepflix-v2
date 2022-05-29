<?php
require_once __DIR__ . '/php/session.php';

$page = h($_GET['page']) ?? null;
$param = h($_GET['param']) ?? null;
?>

<!DOCTYPE html>
<html lang="EN" dir="ltr">
<head>
  <title>NEPFLIX- <?= ucwords($page) ?? '404' ?></title>
  <?php require_once __DIR__ . '/views/includes/head.php'; ?>
  <?php if (file_exists(__DIR__ . '/css/' . strtolower($page) . '.css')): ?>
    <link rel="stylesheet" type="text/css" href="/css/<?= strtolower($page) ?>.css">
  <?php endif; ?>
</head>

<body>
<?php require_once __DIR__ . '/views/includes/header.php'; ?>

<?php if (file_exists(__DIR__ . '/views/' . strtolower($page) . '.php')): ?>
  <?php require_once __DIR__ . '/views/' . strtolower($page) . '.php'; ?>
<?php else: ?>
  <?php require_once __DIR__ . '/views/404.php'; ?>
<?php endif; ?>

<?php require_once __DIR__ . '/views/includes/footer.php'; ?>
</body>
</html>