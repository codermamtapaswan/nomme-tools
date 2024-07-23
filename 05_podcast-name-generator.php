<!DOCTYPE html>
<html>

<head>
  <title>Podcast Name Generator</title>
</head>

<body>
  <h1>Podcast Name Generator</h1>
  <form method="post" action="">
    <label for="keywords">Enter Keywords:</label>
    <input type="text" name="keywords" id="keywords" required>
    <br>
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $suffixes = ['Show', 'Cast', 'Talk', 'Series', 'Chronicles'];
    $names = [];

    foreach ($suffixes as $suffix) {
      $names[] = $keywords . ' ' . $suffix;
    }

    echo "<h2>Generated Podcast Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
  }
  ?>
</body>

</html>