<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <!-- styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <main>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li><?= $task->title; ?></li>
      <?php endforeach; ?>
    </ul>
  </main>
</body>

</html>