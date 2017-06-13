<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/2
 * Time: 23:15
 */
if(!$_GET['ac']){
    $_GET['ac'] = 'index';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        *{
            margin:0;
            padding:0;
        }
    </style>
</head>
<body>
<img src="shejitu/<?php echo $_GET['ac'] ?>.jpg" style="width:3539px;height:1000px;display:block;">
</body>
</html>
