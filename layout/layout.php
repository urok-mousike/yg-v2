<!DOCTYPE html>
<html lang="ko-KR">
<head>
<?php include "inc/head.php" ?>
<?php switch_write("head") ?>
</head>
<body>
<?php switch_write("start") ?>
<div id="dvWrap">
<?php include "inc/header.php" ?>
    <div id="dvContainer">
        <div id="dvContainerInner">
<?php include $__['main']?>
        </div>
    </div>
<?php include "inc/footer.php" ?>
</div>
<?php switch_write("end") ?>
</body>
</html>