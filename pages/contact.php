<?php
$pageTitle   = 'Contact Us';
$currentPage = 'contact';
require __DIR__ . '/../includes/header.php';

$today = date('l');   // today's name, e.g. "Monday"
?>

<div class="page-head">
    <h1>Contact Us</h1>
    <p class="lead">Visit us, call us or send us an email.</p>
</div>

<div class="info-box">
    <p><strong>Address:</strong> <?= $site['address'] ?></p>
    <p><strong>Phone:</strong> <?= $site['phone'] ?></p>
    <p><strong>Email:</strong> <?= $site['email'] ?></p>
</div>

<h2>Opening Hours</h2>
<table>
    <tr><th>Day</th><th>Hours</th></tr>
    <?php foreach ($openingHours as $day => $hours): ?>
        <?php if ($day === $today): ?>
            <tr class="today">
                <td><?= $day ?> (Today)</td>
                <td><?= $hours ?></td>
            </tr>
        <?php else: ?>
            <tr>
                <td><?= $day ?></td>
                <td><?= $hours ?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>

<?php require __DIR__ . '/../includes/footer.php'; ?>