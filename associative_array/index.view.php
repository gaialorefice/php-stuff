<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        <li> <strong>Name:  </strong> <?= $task['title']?></li>
        <li> <strong>Date:  </strong> <?= $task['due']?></li>
        <li> <strong>Has to do it:   </strong> <?= $task['assigned_to']?></li>
        <li> <strong>Status:</strong> <?= $task['completed']? 'completed': 'incompleted'?></li>
    </ul>


</body>
</html>