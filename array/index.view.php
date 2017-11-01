<html>

    <head>


    </head>

    <body>

        <ul>
            <?php foreach($animals as $animal){

                echo "<li> $animal </li>";

            } ?>

            <?php foreach ($animals as $animal):?>

                <li><?= $animal ?></li>

            <?php endforeach;?>

        </ul>

    </body>


</html>