<?php
$pageTitle   = 'Gallery';
$currentPage = 'gallery';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-head">
    <h1>Gallery</h1>
    <p class="lead">A look inside <?= $site['name'] ?>.</p>
</div>

<div class="grid gallery">
    <?php foreach ($gallery as $photo): ?>
        <figure>
            <img src="../assets/images/<?= $photo['image'] ?>" alt="<?= $photo['caption'] ?>">
            <figcaption><?= $photo['caption'] ?></figcaption>
        </figure>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
