<!-- 
https://namify.tech/brand-name-generator
 -->
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
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $suffixes = ['Inc', 'LLC', 'Co', 'Group', 'Solutions'];
    $adjectives = ['Smart', 'Epic', 'Prime', 'Nex', 'Ultra', 'Zen', 'Pro'];
    $nouns = ['Tech', 'Labs', 'Ventures', 'Works', 'Hub', 'Network'];
    $names = [];

    // Generate creative names
    foreach ($suffixes as $suffix) {
      $names[] = $keywords . ' ' . $suffix;
      foreach ($adjectives as $adj) {
        $names[] = $adj . ' ' . $keywords . ' ' . $suffix;
      }
      foreach ($nouns as $noun) {
        $names[] = $keywords . ' ' . $noun . ' ' . $suffix;
      }
    }

    // Remove duplicates
    $names = array_unique($names);

    echo "<h2>Generated Brand Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
  }


  ?>
</body>

</html>