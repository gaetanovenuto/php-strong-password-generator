

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Strong PSW Generator</title>
  </head>
  <body>
    <h1>
      PHP STRONG PASSWORD GENERATOR
    </h1>

    <form method="GET">
      <label for="passwLength">
        Lunghezza della password
      </label>
      <input type="number" name="passwLength" required>
      <button type="submit">
        Genera password
      </button>
    </form>

    <?php
      require_once __DIR__ . '/functions.php';
    ?>
  </body>
</html>
