<?php

include 'node.php';

interface Electronics { 
    public function setModel($name);  
    public function getModel();
  }
  
?>


<html>
    <body>
        <pre><?php echo $elect -> getModel(); ?></pre>
    </body>
</html>