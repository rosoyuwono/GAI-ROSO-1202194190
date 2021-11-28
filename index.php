<?php
// require('database.php');
require('navbar.php');
?>

<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    
          switch ($page) {
            case 'home':
              include "travel.php";
              break;
            case 'register':
              include "register.php";
              break;
            case 'login':
              include "login.php";
              break;
          }
      }else{
        include "travel.php";
      } 
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
require('footer.php');
?>