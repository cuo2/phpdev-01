<?php

include 'node.php';

interface Car { 
    public function setModel($name);  
    public function getModel();
  }
  
?>


<html>
    <body>
    <h1><?php echo "Hello world!"; ?></h1>
        <p>I'm <?php echo $_REQUEST['name'] ?? 'Noname'; ?></p>
        <pre><?php echo $car -> getModel(); ?></pre>
    </body>
</html>