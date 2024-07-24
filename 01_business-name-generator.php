<!-- source refernces
https://namy.ai/
https://github.com/designbycode/business-name-generator

https://looka.com/business-name-generator/
https://github.com/fzaninotto/Faker
https://logo.com/business-name-generator
https://www.shopify.com/in/tools/business-name-generator
https://stackoverflow.com/questions/28688442/how-to-generate-random-name-of-person-using-php

https://www.google.com/search?q=thesaurus+api+free&rlz=1C1RXQR_enIN1026IN1026&oq=thesaurus+api+f&gs_lcrp=EgZjaHJvbWUqBwgAEAAYgAQyBwgAEAAYgAQyBggBEEUYOTIKCAIQABiABBiiBKgCCLACAQ&sourceid=chrome&ie=UTF-8

https://www.google.com/search?q=github+repo+for+synonoms+in+php&rlz=1C1RXQR_enIN1026IN1026&oq=github+repo+for+synonoms+in+php&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRhA0gEJMjk3ODNqMGo3qAIIsAIB&sourceid=chrome&ie=UTF-8

https://www.thesaurus.com/browse/repository
-->

<!DOCTYPE html>
<html>

<head>
  <title>Business Name Generator</title>
</head>

<body>
  <h1>Business Name Generator</h1>
  <form method="post">
    <label for="keywords">Enter Keywords:</label>
    <input type="text" id="keywords" name="keywords" required>

    <label for="number">Number of Names to Generate:</label>
    <input type="number" id="number" name="number" min="1" max="100" required>

    <button type="submit">Generate Names</button>
  </form>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $keywordArray = explode(' ', $keywords);
    $suffixes = ['Tech', 'Solutions', 'Design', 'Studio', 'Works', 'Hub', 'Group'];
    $prefixes = ['Global', 'Innovative', 'NextGen', 'Elite', 'Prime'];
    $limit = (int)$_POST['number'];
    $generatedNames = [];

     // Fetch synonyms using Datamuse API
     function getSynonyms($word)
     {
         $url = "https://api.datamuse.com/words?ml=" . urlencode($word);
         $response = @file_get_contents($url);
         if ($response === FALSE) {
             return [];
         }
         $data = json_decode($response, true);
         $synonyms = [];
         if (is_array($data)) {
             foreach ($data as $item) {
                 $synonyms[] = $item['word'];
             }
         }
         return $synonyms;
     }

     // Generate creative names
     $synonyms = getSynonyms( $keywords);
     foreach ($synonyms as $syn) {
             $generatedNames[] = $suffix . ' ' . $syn;
             $generatedNames[] = $syn . ' ' . $suffix;
     }

    // Generate two-word combinations
    foreach ($keywordArray as $keyword) {
      foreach ($suffixes as $suffix) {
        $generatedNames[] = $keyword . ' ' . $suffix;
      }
      foreach ($prefixes as $prefix) {
        $generatedNames[] = $prefix . ' ' . $keyword;
      }
    }

    // Capitalize names
   

    // Ensure all names are unique and limit the number of names to generate
    $generatedNames = array_unique($generatedNames);
    $generatedNames = array_slice($generatedNames, 0, $limit);

    // Display generated names
    echo "<h1>Generated Business Names</h1>";
    echo "<ul>";
    foreach ($generatedNames as $name) {
      echo "<li>$name</li>";
      
    }
    echo "</ul>";
  }


  ?>
</body>

</html>