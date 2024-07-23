<!DOCTYPE html>
<html>

<head>
  <title>Brand Name Generator</title>
</head>

<body>
  <h1>Brand Name Generator</h1>
  <form method="post" action="">
    <label for="keywords">Enter Keywords:</label>
    <input type="text" name="keywords" id="keywords" required>
    <br>
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $suffixes = ['Inc', 'LLC', 'Co', 'Group', 'Solutions'];
    $names = [];

    foreach ($suffixes as $suffix) {
      $names[] = $keywords . ' ' . $suffix;
    }

    echo "<h2>Generated Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
  }
  ?>
</body>

</html>