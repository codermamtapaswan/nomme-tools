<!-- 
https://www.shopify.com/tools/domain-name-generator
https://www.godaddy.com/en-in/domains/domain-name-generator
https://github.com/oldravian/ai-domain-generator
https://github.com/emfhal/phpWhois-Domain-Generator
https://github.com/phpsquad/domain-maker
https://kodesmart.com/kode/php-name-generator/
https://github.com/wordnik/wordnik-php
https://dailyblogtips.com/200-prefixes-and-suffixes-for-domain-names/
-->
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
    $prefixes = ['my', 'get', 'go', 'top', 'best'];
    $suffixes = ['hub', 'zone', 'world', 'site', 'web'];

    // Generate random string
    function randomString($length = 4)
    {
      $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
      }
      return $randomString;
    }

    foreach ($extensions as $extension) {
      // Add random string
      $randomStr = randomString();
      $names[] = strtolower(str_replace(' ', '', $keywords) . $randomStr . $extension);

      // Add prefixes and suffixes
      foreach ($prefixes as $prefix) {
        $names[] = strtolower($prefix . str_replace(' ', '', $keywords) . $extension);
      }
      foreach ($suffixes as $suffix) {
        $names[] = strtolower(str_replace(' ', '', $keywords) . $suffix . $extension);
      }
    }

    // Remove duplicates
    $names = array_unique($names);

    echo "<h2>Generated Domain Names:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
  }
  ?>
  <?php
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   $keywords = htmlspecialchars($_POST['keywords']);
  //   $extensions = ['.com', '.net', '.org', '.io', '.co'];
  //   $names = [];

  //   // Fetch synonyms using Datamuse API
  //   function getSynonyms($word)
  //   {
  //     $url = "https://api.datamuse.com/words?rel_syn=" . urlencode($word);
  //     $response = file_get_contents($url);
  //     $data = json_decode($response, true);
  //     $synonyms = [];
  //     foreach ($data as $item) {
  //       $synonyms[] = $item['word'];
  //     }
  //     return $synonyms;
  //   }

  //   // Generate creative names
  //   $synonyms = getSynonyms($keywords);
  //   foreach ($synonyms as $syn) {
  //     foreach ($extensions as $extension) {
  //       $names[] = strtolower(str_replace(' ', '', $syn) . $extension);
  //     }
  //   }

  //   // Remove duplicates
  //   $names = array_unique($names);

  //   echo "<h2>Generated Domain Names:</h2><ul>";
  //   foreach ($names as $name) {
  //     echo "<li>" . htmlspecialchars($name) . "</li>";
  //   }
  //   echo "</ul>";
  // }
  ?>


</body>

</html>