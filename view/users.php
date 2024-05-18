<?php include '../view/header.php'; ?>

<h1>User List</h1>
<ul>
    <?php foreach ($data as $user): ?>
        <li><?php echo htmlspecialchars($user->name); ?></li>
    <?php endforeach; ?>
</ul>

</main>
</body>
</html>