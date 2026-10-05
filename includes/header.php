
<?php require_once __DIR__ . '/data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> | <?= $site['name'] ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <a href="home.php" class="logo">☕ <?= $site['name'] ?></a>
            <?php require __DIR__ . '/nav.php'; ?>
        </div>
    </header>

    <main class="container">