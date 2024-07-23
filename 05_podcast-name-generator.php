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
    $suffixes = [
      'Show', 'Cast', 'Talk', 'Series', 'Chronicles',        'Spreading', 'Today', 'Pioneers', 'ArtOf', 'Insights', 'Wallet', 'ScienceOf',
      'Storyof', 'Unplugged', 'MastersIn', 'Missing', 'Unveiled', 'Planet', 'Progress',
      'Matter', 'PowerOf', 'Frontier', 'Transforming', 'Mastering', 'Less', 'JourneyTo',
      'Deciphered', 'Nuggets', 'HeartOf', 'Revolution', 'FutureOf', 'EvolutionOfHustle',
      'PathTo', 'Indepth', 'Unscripted', 'Excellence', 'Method', 'Unpacking', 'PioneersIn',
      'BestIn', 'ThisWeekIn', 'Mastery', 'Adventures', 'Center', 'Thedaily', 'SchoolOf',
      'Being', 'RiseOf', 'GeniusOf', 'Hidden', 'RoadTo', 'Empowerment', 'Innovation',
      'Breakthrough', 'Perspective', 'Reality', 'Extra', 'BakingA', 'MastersOf', 'SecretsOf',
      'Decoded', 'OffClock', 'Layer', 'Silver', 'Over', 'OneLast', 'Odyssey', 'Visionaries',
      'KeysTo', 'Matters', 'Unfolded', 'Horizons', 'MindsetOf', 'Innovating', 'MyFavorite',
      'Focus', 'Daily', 'VisionOf', 'Thoughtson', 'Exploring', 'Up', 'Self', 'WorldOf',
      'Spirit', 'Radio', 'Resources', 'Talks', 'Money', 'Engine', 'Weekly'
    ];
    $names = [];

    foreach ($suffixes as $suffix) {
      $names[] = $keywords . ' ' . $suffix;
      $names[] = $$suffix . ' ' . $keywords;
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