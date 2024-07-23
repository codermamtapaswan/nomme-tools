<?php
function generateBusinessName()
{
  $adjectives = ["Global", "Dynamic", "Innovative", "Prime", "Elite"];
  $nouns = ["Solutions", "Enterprises", "Ventures", "Technologies", "Services"];

  $adjective = $adjectives[array_rand($adjectives)];
  $noun = $nouns[array_rand($nouns)];

  return $adjective . " " . $noun;
}

function generateUsername()
{
  $adjectives = ["Cool", "Smart", "Fast", "Brave", "Bright"];
  $animals = ["Tiger", "Eagle", "Shark", "Wolf", "Lion"];
  $numbers = rand(10, 99);

  $adjective = $adjectives[array_rand($adjectives)];
  $animal = $animals[array_rand($animals)];

  return $adjective . $animal . $numbers;
}

function generateProductName()
{
  $descriptors = ["Super", "Ultra", "Mega", "Hyper", "Pro"];
  $items = ["Phone", "Watch", "Laptop", "Tablet", "Camera"];

  $descriptor = $descriptors[array_rand($descriptors)];
  $item = $items[array_rand($items)];

  return $descriptor . " " . $item;
}
?>
<!-- In JavaScript - Math.random():

const names = ["alice", "bob", "charley"]
// call these lines from a button or something
key = Math.floor(Math.random() * names.length);
return names[key]


In php - array_rand randomizes an array, the second parameter pops first element:

$names=array("alice","bob","charley");
$key=array_rand($names,1);
echo $names[$key];
In python, it couldn’t be simpler:

name = random.choice(“alice”, “bob”, “charley”)

https://stackoverflow.com/questions/28688442/how-to-generate-random-name-of-person-using-php -->


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $keywords = htmlspecialchars($_POST['keywords']);
  $keywordArray = explode(' ', $keywords);
  $suffixes = ['Tech', 'Solutions', 'Design', 'Studio', 'Works', 'Hub', 'Group'];
  $prefixes = ['Global', 'Innovative', 'NextGen', 'Elite', 'Prime'];
  $adjectives = ['Creative', 'Dynamic', 'Visionary', 'Smart', 'Modern'];
  $nouns = ['Systems', 'Enterprises', 'Solutions', 'Concepts', 'Innovations'];

  $limit = (int)$_POST['number'];
  $generatedNames = [];

  // Generate names by combining keywords with suffixes and prefixes
  foreach ($keywordArray as $keyword) {
    foreach ($suffixes as $suffix) {
      foreach ($prefixes as $prefix) {
        $generatedNames[] = $prefix . ' ' . ucfirst($keyword) . ' ' . $suffix;
        $generatedNames[] = ucfirst($keyword) . ' ' . $suffix . ' ' . $prefix;
      }
      foreach ($adjectives as $adjective) {
        $generatedNames[] = $adjective . ' ' . ucfirst($keyword) . ' ' . $suffix;
      }
    }
    foreach ($nouns as $noun) {
      foreach ($suffixes as $suffix) {
        $generatedNames[] = ucfirst($keyword) . ' ' . $noun . ' ' . $suffix;
      }
    }
  }

  // Randomly capitalize letters in names
  foreach ($generatedNames as &$name) {
    $name = capitalizeRandomly($name);
  }

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

function capitalizeRandomly($string)
{
  $characters = str_split($string);
  $length = count($characters);
  for ($i = 0; $i < $length; $i++) {
    if (rand(0, 1)) {
      $characters[$i] = strtoupper($characters[$i]);
    }
  }
  return implode('', $characters);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Business Name Generator</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      text-align: center;
    }

    form {
      margin-top: 50px;
    }

    input,
    button {
      padding: 10px;
      margin: 5px;
    }
  </style>
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
</body>

</html>