<!Doctype html>
<html>
<head>
    <meta charset="UTF">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mboutique Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="FINALMBOUTIQUESUBMISSIONSTYLING.css">
</head>
<body>
<?php
include_once('header.php');
    ?>
<div id="main_content">

<?php
// if(empty($_GET['page'])){
//        $page='welcome';
//        include_once($menuArray[$page]["url"]);
//        print_r($_GET);
//    } else if($_GET['page']=='macarons'||$_GET['page']=='gifts'||$_GET['page']=='welcome'||$_GET['page']=='contact'){
//        $page=$_GET['page'];
//        include_once($menuArray[$page]["url"]);
//    } else{
//        include("404.php");
//    }
 if(empty($_GET['page'])){
        $page='welcome';
     include_once($menuArray[$page]["url"]);
    }else{
     if(isset($menuArray[$_GET['page']])) {
         $page = $_GET['page'];
         include_once($menuArray[$page]["url"]);
     }else{
         include("404.php");
     }
 };
print('page'.print_r($page,true));
?>
    <?php
    print_r($_GET)
    ?>
</div>
<?php
include_once('footer.php');
?>
</body>
