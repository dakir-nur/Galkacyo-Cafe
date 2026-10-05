<?php
$pageTitle   = 'Our Menu';
$currentPage = 'menu';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-head">
    <h1>Our Menu</h1>
    <p class="lead">We have <?= count($menuItems) ?> items. Everything is fresh every day.</p>
</div>

<div class="grid">
    <?php foreach ($menuItems as $item): ?>
        <div class="card">
            <span class="tag"><?= $item['category'] ?></span>
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['description'] ?></p>
            <p class="price"><?= $item['price'] ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>