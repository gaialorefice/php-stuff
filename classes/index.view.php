<html>

  <head>
      <title>Classes 101</title>
  </head>

  <body>

    <ul>

        <?php foreach ($tasks as $task): ?>

          <li>

            <?php if ( $task->isCompleted() ): ?>

                <del><?= $task->description() ?></del>

            <?php else: ?>

                <?= $task->description() ?>

            <?php endif; ?>

          </li>

        <?php endforeach; ?>

    </ul>

  </body>

</html>
