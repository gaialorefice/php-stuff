<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The question of the year</title>
</head>
<body>

    <?php
        if($is_fabio_babbs){
            echo 'Fabio is reeeealy babbsss';
        }else{
            echo 'No, he is not!';
        }
    ?>
    <?= $is_fabio_babbs ?  'Yes, fabio is babbsss 	&#x2714;' : 'No, Fabio is not babbss &#x2718;'?>

    <?php if($is_fabio_babbs): ?>

        <h1> Yes, fabio is babbsss 	&#x2714; </h1>
    <?php else : ?>
        <h1>No, Fabio is not babbss &#x2718; </h1>

    <?php endif; ?>


</body>
</html>