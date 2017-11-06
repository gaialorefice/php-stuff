<?php

require 'task.php';

$tasks = [
  new Task('Go to the mall'),
  new Task('Read a book'),
  new Task('Learn how to not do php')
];

$tasks[0]->complete();

require 'index.view.php';
