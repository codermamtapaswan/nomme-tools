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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $generatorType = $_POST['generatorType'];
  $result = "";

  switch ($generatorType) {
    case 'business':
      $result = generateBusinessName();
      break;
    case 'username':
      $result = generateUsername();
      break;
    case 'product':
      $result = generateProductName();
      break;
    default:
      $result = "Please select a valid generator type.";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Name Generator</title>
</head>

<body>
  <h1>Name Generator</h1>
  <form method="post">
    <label for="generatorType">Select Generator Type:</label>
    <select name="generatorType" id="generatorType">
      <option value="business">Business Name Generator</option>
      <option value="username">Username Generator</option>
      <option value="product">Product Name Generator</option>
      <!-- Add more options as needed -->
    </select>
    <br><br>
    <input type="submit" value="Generate">
  </form>

  <?php if (isset($result)) : ?>
    <h2>Generated Name:</h2>
    <p><?php echo $result; ?></p>
  <?php endif; ?>
</body>

</html>