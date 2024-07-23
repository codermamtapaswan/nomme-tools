<!DOCTYPE html>
<html>

<head>
  <title>Product Name Generator</title>
</head>

<body>
  <h1>Product Name Generator</h1>
  <form method="post" action="">
    <label for="keywords">Enter Keywords:</label>
    <input type="text" name="keywords" id="keywords" required>
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $suffixes = [
      'ProSeries', 'Control', 'ProGrade', 'SmartTech', 'Boostmax', 'Power', 'Vision',
      'Effortless', 'Intuitive', 'Miracle', 'Magic', 'X', 'Elite', 'Nexus', 'Zone',
      'Quick', 'TopRated', 'Innovative', 'Genius', 'Classic', 'Elite', 'Perfect', 'Pro',
      'Xtreme', 'Vital', 'HighSpeed', 'Style', 'Upgrade', 'Ace', 'Smart', 'Comfort',
      'Fusion', 'Revolution', 'Solutions', 'Eco', 'Superb', 'Plusplus', 'Top', 'Sonic',
      'NextLevel', 'Ease', 'Superior', 'Max', 'Prime', 'Ultimate', 'Tech', 'Reliable',
      'Easy', 'Super', 'Pro', 'Premium', 'Hybrid', 'AllInOne', 'Go', 'Extreme',
      'Powerful', 'Wonder', 'Essential', 'Optimized', 'Energy', 'Boost', 'Hq', 'Dynamic',
      'Plus', 'Advance', 'Next', 'NextGen', 'Radiant', 'Best', 'Pure', 'Unique',
      'SuperFast', 'Master', 'Vision', 'Dream', 'Health', 'Safe', 'Speed', 'Prime',
      'Edge', 'Flex', 'Eco', 'Master', 'Max', 'Sleek', 'Ultra', 'Rapid', 'Tech',
      'Fresh', 'Dom', 'Suite', 'Den', 'Roam', 'Reach', 'Cellar', 'Moth', 'Blog',
      'Venue', 'Keep', 'Route'
    ];
    $names = [];

    foreach ($suffixes as $suffix) {
      // Add suffix to keyword
      $names[] = $keywords . ' ' . $suffix;
      // Add prefix to keyword
      $names[] = $suffix . ' ' . $keywords;
    }
    $names = array_unique($names);

    echo "<h2>Generated Product Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
  }
  ?>

</body>

</html>