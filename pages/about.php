<?php
$pageTitle   = 'About Us';
$currentPage = 'about';
require __DIR__ . '/../includes/header.php';
?>

<div class="page-head">
    <h1>About Us</h1>
    <p class="lead"><?= $site['name'] ?> opened in 2020. We serve fresh coffee and Somali tea in a friendly place.</p>
</div>

<h2>Our Team (<?= count($team) ?> people)</h2>
<ul class="team">
    <?php foreach ($team as $member): ?>
        <li><strong><?= $member['name'] ?></strong> <span><?= $member['role'] ?></span></li>
    <?php endforeach; ?>
</ul>

<?php require __DIR__ . '/../includes/footer.php'; ?>