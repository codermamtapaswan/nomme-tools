<!-- 
https://github.com/search?q=username+generator++using+php&type=repositories
https://github.com/marlongilette/Username-Generator
https://github.com/Avitheus/genname
https://github.com/taylornetwork/username-suggester
https://github.com/taylornetwork/laravel-username-generator
https://github.com/ziadoz/awesome-php

https://kodesmart.com/kode/php-name-generator/

https://stackoverflow.com/questions/28688442/how-to-generate-random-name-of-person-using-php
https://www.spinxo.com/
https://github.com/topics/username-generator

https://www.hootsuite.com/social-media-tools/username-generator

-->

<!DOCTYPE html>
<html>

<head>
  <title>Username Generator</title>
</head>

<body>
  <h1>Username Generator</h1>
  <form method="post" action="">
    <label for="keywords">Enter Keywords:</label>
    <input type="text" name="keywords" id="keywords" required>
    <br>
    <input type="submit" value="Generate Names">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keywords = htmlspecialchars($_POST['keywords']);
    $suffixes = ['_user', '_official', '_thegreat', '_123', '_xyz'];
    $names = [];

    foreach ($suffixes as $suffix) {
      $names[] = $keywords . $suffix;
    }

    function random_username($string) {
    $pattern = " ";
    $firstPart = strstr(strtolower($string), $pattern, true);
    $secondPart = substr(strstr(strtolower($string), $pattern, false), 0, 3);
    $nrRand = rand(0, 100);

    $username = $firstPart.$secondPart.$nrRand;
    return $username;
}


    echo "<h2>Generated Usernames:</h2><ul>";
    foreach ($names as $name) {
      echo "<li>" . htmlspecialchars($name) . "</li>";
    }
    echo "</ul>";
    echo random_username($keywords);
  }
  ?>
</body>

</html>