<?php
// prepare any data that we will need for rendering

$title = 'Inline PHP practice';

$messages = [
  'Preparing to do some stuff...',
  'Doing amazing stuff...',
  'Stuff is done.'
];

$vehicles = [
  'Bicycle' => 50,
  'Car' => 150,
  'Train' => 110
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
</head>
<body>

  <h1><?= $title ?></h1>

  <?php if ($messages) : ?>

  <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
    
      <?php foreach($messages as $message) : ?>
        <li><?= $message ?> </li>
      <?php endforeach; ?>
  </ul>

<?php endif; ?>

  <table>
    <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>
    <tr>
    <?php foreach($vehicles as $vehicle => $value) : ?>
    <tr>
        <td><?= $vehicle ?></td>
        <td><?= $value ?></td>
    </tr>
    </tr>
<?php endforeach; ?>
    




</table>

</body>
</html>