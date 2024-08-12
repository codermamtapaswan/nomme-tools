<?php include "header.php"; ?>

<div class="container mt-5">
  <div class="all-page">
    <h1 class="text-center">Nomme Tools</h1>

    <div class=" mt-5 row justify-content-center align-items-center text-center nomme-tool ">
    <a href="01_business-name-generator.php" class="way-btn">Business Name Generator</a>
      <a href="02_brand-name-generator.php" class="way-btn">Brand Name Generator</a>
      <a href="03_domain-name-generator.php" class="way-btn">Domain Name Generator</a>
      <a href="04_product-name-generator.php" class="way-btn">Product Name Generator</a>
      <a href="05_podcast-name-generator.php" class="way-btn">Podcast Name Generator</a>
      <a href="06_username-generator.php" class="way-btn">Username Name Generator</a>
      <a href="07_instagram-name-generator.php" class="way-btn">Instagram Username Generator</a>
      <a href="08_random-name-generator.php" class="way-btn">Random Username Generator</a>
      <a href="09_reddit-name-generator.php" class="way-btn">Reddit Username Generator</a>
      <a href="10_snapchat-username-generator.php" class="way-btn">Snapchat Username Generator</a>
      <a href="11_tiktok-username-generator.php" class="way-btn">TikTok Username Generator</a>
      <a href="12_youtube-name-generator.php" class="way-btn">YouTube Name Generator</a>
      <a href="13_gaming-name-generator.php" class="way-btn">Gaming Name Generator</a>
      <a href="14_gamertag-generator.php" class="way-btn">Gamertag Generator</a>
      <a href="15_roblox-username-generator.php" class="way-btn">Roblox Username Generator</a>
    </div>

  </div>
</div>

<?php include "footer.php"; ?>


<!-- https://www.datamuse.com/api/
 https://github.com/nubs/random-name-generator?tab=readme-ov-file
 https://stackoverflow.com/questions/35037149/generate-random-username-based-on-full-name-php
 https://github.com/Speedysnail6/username-generator?tab=readme-ov-file
 
-->
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $keywords = htmlspecialchars($_POST['keywords']);
//   $extensions = ['.com', '.net', '.org', '.io', '.co'];
//   $names = [];
//   $prefixes = ['my', 'get', 'go', 'top', 'best'];
//   $suffixes = ['hub', 'zone', 'world', 'site', 'web'];

//   // Generate random string
//   function randomString($length = 4)
//   {
//     $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//       $randomString .= $characters[rand(0, strlen($characters) - 1)];
//     }
//     return $randomString;
//   }

//   foreach ($extensions as $extension) {
//     // Add random string
//     $randomStr = randomString();
//     $names[] = strtolower(str_replace(' ', '', $keywords) . $randomStr . $extension);

//     // Add prefixes and suffixes
//     foreach ($prefixes as $prefix) {
//       $names[] = strtolower($prefix . str_replace(' ', '', $keywords) . $extension);
//     }
//     foreach ($suffixes as $suffix) {
//       $names[] = strtolower(str_replace(' ', '', $keywords) . $suffix . $extension);
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