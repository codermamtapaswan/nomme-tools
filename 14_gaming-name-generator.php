<!DOCTYPE html>
<html>

<head>
  <title>Gaming Name Generator</title>
</head>

<body>
  <h1>Gaming Name Generator</h1>
  <form method="post" action="">
    <label for="keywords">Enter Keywords:</label>
    <input type="text" name="keywords" id="keywords" required>
    <br>
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $suffixes = ['Warrior', 'Ninja', 'Master', 'Hero', 'Legend'];
    $names = [];

    foreach ($suffixes as $suffix) {
      $names[] = $keywords . ' ' . $suffix;
    }

    echo "<h2>Generated Gaming Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
  }
  ?>
</body>

</html>