<?php
use app\controller\globals\consts;
use app\controller\layout\attributes;
$attibutes = new attributes();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" href="<?php echo server.consts::icon?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo consts::author?>">
    <?php $attibutes->getcss();?>
    <title><?php echo consts::app?></title>
</head>
<body>

<?php include 'includes/menu.php';?>

<main>