<!DOCTYPE html>
<html>

<head>
  <title>Business Name Generator</title>
</head>

<body>
  <h1>Business Name Generator</h1>
  <form method="post" action="">
    <input type="text" name="keyword" placeholder="Enter a keyword" required>
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keyword = htmlspecialchars($_POST['keyword']);
    $suffixes = ['Tech', 'Solutions', 'Design', 'Studio', 'Works', 'Hub', 'Group'];
    $names = [];

    foreach ($suffixes as $suffix) {
      $names[] = $keyword . ' ' . $suffix;
      $names[] = $suffix . ' ' . $keyword;
    }

    echo "<h2>Generated Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . $name . "</li>";
    }
    echo "</ul>";
  }
  ?>
</body>

</html>