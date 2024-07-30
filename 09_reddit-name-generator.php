<?php

require_once "noome-tools.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $keyword = sanitize_input($_POST['keyword'] ?? '');   // Retrieve and sanitize input
  if ($keyword !== false) {

      // Generate the names
      $generatedNames = uniqueNameSet("reddit", $keyword);
      $limit = 28;

      if (!empty($generatedNames)) {

        // Limit the number of generated names to the specified limit
        $generatedNames = array_slice($generatedNames, 0, $limit);

        // Store the generated names for displaying in HTML
        $generatedNames = array_map('htmlspecialchars', $generatedNames);
      }
      else{
        $message = "No Resulst Found! Try Again";
      }
    
  } else {
    $message = "Please enter a valid keyword";
  }
}

?>



<?php include "header.php"; ?>

<div class="container mt-5">
  <div class="all-page">

    <!-- tools container  Start-->
    <div class="noome-tool-box">
      <div class="tag">Reddit Name</div>
      <div class="nomme-tool-title">
        <h1>Reddit Name Generator</h1>
        <p>Get a unique and memorable name that will make your Reddit stand out from the competition.</p>
      </div>

      <form method="post">
        <div class="tooltip">
          <input type="text" name="keyword" class="keyword" placeholder="Enter Keywords" required>
          <span class="tooltip-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" width="20" height="20"><g stroke-width="0"/><g stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M18.334 10a8.334 8.334 0 1 1-16.668 0 8.334 8.334 0 0 1 16.668 0M10 6.458a.94.94 0 0 0-.938.938.626.626 0 0 1-1.25 0 2.188 2.188 0 1 1 3.756 1.524l-.22.222a6 6 0 0 0-.476.514c-.184.234-.248.408-.248.552v.626a.626.626 0 0 1-1.25 0v-.626c0-.546.254-.988.512-1.32.19-.244.43-.484.626-.678l.16-.162A.938.938 0 0 0 10 6.458m0 7.708a.834.834 0 1 0 0-1.666.834.834 0 0 0 0 1.666" fill="#fff"/></svg>
          </span>
          <span class="tooltiptext">Tip: Add additional keywords using comma, tab, space, or enter. Only letters and numbers can be used.</span>
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