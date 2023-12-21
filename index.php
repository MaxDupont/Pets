<?php
error_reporting(-1);
require_once __DIR__ . '/vendor/autoload.php';
use src\ListAnimals;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашние любимцы</title>
</head>
<body>
<form>
    <?php foreach ((new ListAnimals())->getAnimals() as $pet) : ?>
        <button onclick="alert('<?php echo $pet->makeSound() ?>')"><?php echo $pet->getName() ?></button><br />
    <?php endforeach; ?>
</form>
</body>
</html>
