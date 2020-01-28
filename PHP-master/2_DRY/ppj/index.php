

<?php
        include 'template/menu.php';
  
     //   include 'template/first_container.php';

//        include 'template/second_container.php';

  //      include 'template/third_container.php';
  include 'template/config/rooter.php';
//   include "about.php";
  $init = new Rooter(root, 'about.php');
var_dump($_GET['page']);
        include 'template/footer.php';
    ?>
