<?php

require_once "noome-tools.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve and sanitize input
  $keyword = $_POST['keyword'];
  $limit = filter_var($_POST['number'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 50]]);

  // Validate inputs
  if ($keyword && $limit !== false) {
    $components = buildName('Business');
    $adjectives = $components['adjective'];
    $suffix = $components['suffix'];
    $prefixes = $components['prefix'];

    // Initialize an array to hold generated names
    $generatedNames = [];

    // Generate names based on the keyword and components
    $generatedNames[] = strtolower(str_replace(' ', '', $keyword . $suffix));
    $generatedNames[] = strtolower(str_replace(' ', '', $adjectives . $keyword));
    $generatedNames[] = strtolower(str_replace(' ', '', $prefixes . $keyword));

    // Generate additional names using an API or predefined words
    $apiWords = generateApiWords($keyword);
    foreach ($apiWords as $type => $words) {
      foreach ($words as $word) {
        // Combine API words with the keyword and other components
        $generatedNames[] = strtolower($adjectives . " " . $keyword . " " . $suffix);
        $generatedNames[] = strtolower($prefixes . " " . $keyword . " " . $suffix);
        $generatedNames[] = strtolower($keyword . " " . $word);
      }
    }
    // Limit the number of generated names to the specified limit
    $generatedNames = array_slice($generatedNames, 0, $limit);

    // Store the generated names for displaying in HTML
    $generatedNames = array_map('htmlspecialchars', $generatedNames);
  } else {
    $message =  "Please enter a valid keyword and number between 1 and 50.";
  }
}
?>



<?php include "header.php"; ?>

<div class="container mt-5">
  <div class="all-page">

    <!-- tools container  Start-->
    <div class="noome-tool-box">
      <div class="tag">Business Name</div>
      <div class="nomme-tool-title">
        <h1>Business Name Generator</h1>
        <p>Get a unique and memorable name that will make your business stand out from the competition.</p>
      </div>

      <form method="post">
        <div class="tooltip">
          <input type="text" name="keyword" class="keyword" placeholder="Enter Keywords" required>
          <span class="tooltiptext">Tip: Add additional keywords using comma, tab, space, or enter. Only letters and numbers can be used.</span>
        </div>
        <div class="tooltip">
          <input type="number" name="number" placeholder="Count" min="1" max="100" required>
          <span class="tooltiptext">Tip: How many number of name want to generate .</span>
        </div>

        <button class="way-btn">
          <span> Generate</span>

          <svg viewBox="0 0 20 20" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
            <g stroke-width="0" />
            <g stroke-linecap="round" stroke-linejoin="round" />
            <path d="m8.75 3.75.625-1.25 1.25-.625-1.25-.625L8.75 0l-.625 1.25-1.25.625 1.25.625zm-5.625 2.5 1.041-2.083L6.25 3.125 4.166 2.083 3.125 0 2.084 2.083 0 3.125l2.084 1.042zm13.75 5-1.041 2.083-2.084 1.042 2.084 1.042 1.041 2.083 1.041-2.083L20 14.375l-2.084-1.042zm2.759-7.569L16.319.366a1.246 1.246 0 0 0-1.767 0L.366 14.552a1.25 1.25 0 0 0 0 1.768l3.314 3.314c.244.244.564.366.884.366s.64-.122.884-.366L19.633 5.448a1.25 1.25 0 0 0 0-1.767m-5.592 4.267-1.989-1.989 3.383-3.383 1.989 1.989z" />
          </svg>
        </button>

      </form>



    </div>

    <div class="row row-gap generated-result">

      <?php if (isset($generatedNames)) : foreach ($generatedNames as $name) : ?>
          <div class="col-lg-3 col-md-6">
            <div class="result">
              <?php echo $name; ?>
            </div>
          </div>
        <?php endforeach;
      else : if (isset($message)) { ?>
          <div class="col-lg-12">
            <div class="result">
              <?php echo $message; ?>
            </div>
          </div>
      <?php  }
      endif; ?>
    </div>
    <!-- tool container End  -->


  </div>
</div>

<?php include "footer.php"; ?>

<!-- source refernces
https://namy.ai/
https://github.com/designbycode/business-name-generator
https://www.dreamhost.com/tools/business-name-generator/

https://looka.com/business-name-generator/
https://github.com/fzaninotto/Faker
https://logo.com/business-name-generator
https://www.shopify.com/in/tools/business-name-generator
https://stackoverflow.com/questions/28688442/how-to-generate-random-name-of-person-using-php

https://www.google.com/search?q=thesaurus+api+free&rlz=1C1RXQR_enIN1026IN1026&oq=thesaurus+api+f&gs_lcrp=EgZjaHJvbWUqBwgAEAAYgAQyBwgAEAAYgAQyBggBEEUYOTIKCAIQABiABBiiBKgCCLACAQ&sourceid=chrome&ie=UTF-8

https://www.google.com/search?q=github+repo+for+synonoms+in+php&rlz=1C1RXQR_enIN1026IN1026&oq=github+repo+for+synonoms+in+php&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRhA0gEJMjk3ODNqMGo3qAIIsAIB&sourceid=chrome&ie=UTF-8

https://www.thesaurus.com/browse/repository
-->