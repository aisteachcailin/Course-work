<?php 
session_start();
require('templates/header.php');
?>

<div id="content" style="width: 100%">

<?php  
//соединение с бд
require('connect.php');
//подключение к бд

if (!isset($_SESSION['sql'])) {
    $_SESSION['sql'] = "SELECT * FROM `films`";
}

$sql_text = $_SESSION['sql'];

$sql=$link->query($sql_text);


$page=$_GET['page'];

if (!isset($page)) {
   require('templates/main.php');
} elseif ($page == 'index') {
    require('templates/main.php');
} elseif ($page == 'shop') {
    require('templates/shop.php');
 } elseif ($page == 'profile') {
    require('authorization/profile.php');
} elseif ($page == 'authorization') {
    require('authorization/index.php');
} elseif ($page == 'register') {
    require('authorization/register.php');
} elseif ($page == 'admin') {
    require('authorization/admin.php');
} elseif ($page == 'openProduct') {

    $idf = $_GET['id'];
    $flm = [];
    foreach ($sql as $film) {
        if($film['id'] == $idf) {
            $flm=$film;
            break;
        }
    }
    require('templates/openProduct.php');

} elseif ($page == 'film_genre') {
        $idf=$_GET['id_genre'];
        if ($idf == 0) {
            $_SESSION['sql'] = "SELECT * FROM `films`";
        } else {
            $_SESSION['sql'] = "SELECT * FROM `films` WHERE `genre` = $idf";}
        $sql_text = $_SESSION['sql'];
        $sql = $link->query($sql_text);
        require('templates/shop.php');
}
//сортировка
elseif ($page == 'sort') {
        $idf=$_GET['id_sort'];
       if ($idf == 1) {
        $sql_text.= " ORDER BY `name`";
       }
       if ($idf == 2) {
        $sql_text.= " ORDER BY `name` DESC";
       }
       if ($idf == 3) {
        $sql_text.= " ORDER BY `price` ASC";
       }
       if ($idf == 4) {
        $sql_text.= " ORDER BY `price` DESC";
       }
       $sql = $link->query($sql_text);
     require ('templates/shop.php');
}
?>    
</div>
<?php 
require('templates/footer.php');
?>