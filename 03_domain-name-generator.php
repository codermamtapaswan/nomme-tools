<!DOCTYPE html>
<html>

<head>
  <title>Domain Name Generator</title>
</head>

<body>
  <h1>Domain Name Generator</h1>
  <form method="post" action="">
    <label for="keywords">Enter Keywords:</label>
    <input type="text" name="keywords" id="keywords" required>
    <br>
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $extensions = ['.com', '.net', '.org', '.io', '.co'];
    $names = [];

    foreach ($extensions as $extension) {
      $names[] = strtolower(str_replace(' ', '', $keywords)) . $extension;
    }

    echo "<h2>Generated Domain Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
  }
  ?>
</body>

</html>