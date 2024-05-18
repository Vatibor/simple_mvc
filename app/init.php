<?php

require_once 'Router.php';

Router::get('/users', 'UserController', 'showUsers');
Router::get('/advertisement', 'AdvController', 'showAdv');
?>
<?php include '../view/header.php'; ?>
<h1>MVC Application</h1>
<p><a href="/users">View Users</a></p>
<p><a href="/advertisement">View Advertisements</a></p>

</main>
</body>
</html>
