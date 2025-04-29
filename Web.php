<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>stránka v PHP</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #121212;
      color: #ffffff;
      padding: 2rem;
      line-height: 1.6;
    }

    .container {
      max-width: 800px;
      margin: auto;
    }

    h1, h2 {
      color: #f0f0f0;
      margin-top: 2rem;
    }

    p {
      color: #cccccc;
    }

    hr {
      border: 0;
      height: 1px;
      background: #333;
      margin: 2rem 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><?php echo "Nadpis 1"; ?></h1>
    <p><?php echo "Toto je úvodní text, frfr"; ?></p>
    <hr>

    <h2><?php echo "Nadpis 2"; ?></h2>
    <p><?php echo "dalsi info etc."; ?></p>
    <hr>

    <h2><?php echo "Nadpis 3"; ?></h2>
    <p><?php echo "idk gng, ts pmo tho"; ?></p>
    <hr>

    <h2><?php echo "Nadpis 4"; ?></h2>
    <p><?php echo "uhhhhh"; ?></p>
  </div>
</body>
</html>
