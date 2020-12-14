<?php
  $db = getenv('DB_NAME');
?>

<h1>First Auto Deploy That Worked!</h1>
<h2>With ENV variables:</h2>
<ul>
  <li>Database Name: <?php echo empty($db) ? 'NOT SET' : $db ?></li>
</ul>
