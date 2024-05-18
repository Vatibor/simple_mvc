<?php include '../view/header.php'; ?>

<h1>Advertisement List</h1>
<ul>
    <?php foreach ($data[0] as $ad): ?>
        <li><?php echo htmlspecialchars($ad['title']) . ' by ' . htmlspecialchars($ad['name']); ?></li>
    <?php endforeach; ?>
</ul>