<?php
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
  $dotenv->load();

  $db = $_ENV['DB_NAME'];
?>

<h1>First Auto Deploy That Worked!</h1>
<h2>With ENV variables:</h2>
<ul>
  <li>Database Name: <?php echo empty($db) ? 'NOT SET' : $db ?></li>
</ul>
