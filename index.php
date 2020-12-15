<?php
  require __DIR__ . '/vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
  $dotenv->load();

  $db = empty($_ENV['DB_NAME']) ? 'NOT SET' : $_ENV['DB_NAME'];
  $env = empty($_ENV['ENVIRONMENT']) ? 'NOT SET' : $_ENV['ENVIRONMENT'];
?>

<h1>Auto Deploy Testing to <?php echo ucfirst($env); ?>!</h1>
<h2>Also with ENV variables:</h2>
<ul>
  <li>Database Name: <?php echo $db ?></li>
</ul>
