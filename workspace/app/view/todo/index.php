<?php
require_once('./../../controller/TodoController.php');

$controler = new TodoController;
$todo_list = $controler->index();

session_start();
$error_msgs = $_SESSION['error_msgs'];
unset($_SESSION['error_msgs']);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div><a href="./new.php">新規作成</a></div>
    <?php if($todo_list): ?>
        <ul>
            <?php foreach($todo_list as $todo):?>
                <li><a href="./detail.php?todo_id=<?php echo $todo['id'] ?>"><?php echo $todo['title'];?></a> : <?php echo $todo['display_status'];?></li>
            <?php endforeach;?>
        </ul>
    <?php else: ?>
        <p>データなし</p>
    <?php endif; ?>

    <?php if($error_msgs):?>
        <div>
            <ul>
                <?php foreach ($error_msgs as $error_msg): ?>
                    <li><?php echo $error_msg;?></li>
                <?php endforeach;?>
            </ul>
        </div>
    <?endif;?>
</body>
</html>

