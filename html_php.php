<?php

$greeting = 'Hello, ' . htmlspecialchars($_GET['name']);


require 'html_php.view.php';