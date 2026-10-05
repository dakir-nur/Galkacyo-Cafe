
<?php
require __DIR__ . '/../includes/functions.php';

$pageTitle   = 'Home';
$currentPage = 'home';
require __DIR__ . '/../includes/header.php';

$favourites = featuredItems($menuItems);
?>

<section class="hero">
    <h1><?= greeting() ?>, welcome to <?= $site['name'] ?></h1>
    <p>Fresh coffee, Somali tea and tasty snacks every day.</p>
    <a href="menu.php" class="btn">See our menu</a>
</section>

<h2>Today's Favourites</h2>
<div class="grid">
    <?php foreach ($favourites as $item): ?>
        <div class="card">
            <span class="tag"><?= $item['category'] ?></span>
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['description'] ?></p>
            <p class="price"><?= $item['price'] ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>