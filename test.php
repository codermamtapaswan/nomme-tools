<!-- tools html  Start-->
<div class="noome-tool-box">
  <div class="nomme-tool-title">
    <h1>Gamertag Name <span>Generator</span></h1>
    <p>Get a unique and memorable name that will make your Gamertag stand out from the competition.</p>
  </div>

  <form method="post">
    <input type="text" name="nekeyword" id="nekeyword" class="keyword" placeholder="Enter Keywords" required>
    <button class="way-btn" id="netool_btn">
      <span> Generate</span>
      <svg viewBox="0 0 20 20" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g stroke-width="0" />
        <g stroke-linecap="round" stroke-linejoin="round" />
        <path d="m8.75 3.75.625-1.25 1.25-.625-1.25-.625L8.75 0l-.625 1.25-1.25.625 1.25.625zm-5.625 2.5 1.041-2.083L6.25 3.125 4.166 2.083 3.125 0 2.084 2.083 0 3.125l2.084 1.042zm13.75 5-1.041 2.083-2.084 1.042 2.084 1.042 1.041 2.083 1.041-2.083L20 14.375l-2.084-1.042zm2.759-7.569L16.319.366a1.246 1.246 0 0 0-1.767 0L.366 14.552a1.25 1.25 0 0 0 0 1.768l3.314 3.314c.244.244.564.366.884.366s.64-.122.884-.366L19.633 5.448a1.25 1.25 0 0 0 0-1.767m-5.592 4.267-1.989-1.989 3.383-3.383 1.989 1.989z" />
      </svg>
    </button>
  </form>

</div>
<!-- tool html End  -->

<!-- tools script  Start-->
<script id="ne-tools-plug">
  document.addEventListener('DOMContentLoaded', () => {
    const netoolBtn = document.getElementById('netool_btn');
    const neKeywordInput = document.getElementById('nekeyword');

    netoolBtn.addEventListener('click', (e) => {
      e.preventDefault();

      // Clear any existing error messages or previous results
      const existingGeneratedResult = document.querySelector('.generated-result');
      if (existingGeneratedResult) {
        existingGeneratedResult.remove();
      }

      // Check if the keyword input is empty
      if (!neKeywordInput.value.trim()) {
        // Create the necessary elements for the error message
        const dataEl = document.createElement('div');
        dataEl.classList.add('generated-result');

        const dataRowEl = document.createElement('div');
        dataRowEl.classList.add('row', 'row-gap', 'justify-content-center');

        const dataColEl = document.createElement('div');
        dataColEl.classList.add('col-lg-12');

        const dataResEl = document.createElement('div');
        dataResEl.classList.add('error');
        dataResEl.innerText = 'Please enter a keyword to generate a name.';

        dataColEl.appendChild(dataResEl);
        dataRowEl.appendChild(dataColEl);
        dataEl.appendChild(dataRowEl);

        // Insert the error message into the DOM
        const afterOfEl = document.getElementsByClassName('noome-tool-box')[0];
        afterOfEl.parentNode.insertBefore(dataEl, afterOfEl.nextSibling);

        return; // Stop the function if the input is blank
      }

      // Change button text to "Loading..."
      netoolBtn.innerHTML = '<span>Loading...</span>';
      netoolBtn.disabled = true; // Optional: Disable the button while loading

      const data = new FormData();
      data.append('action', 'ne_endpoint');
      data.append('xhr_verify', ne_ajax_object.nonce);
      data.append('get_by', 'gtn');
      data.append('keyword', neKeywordInput?.value);

      fetch(ne_ajax_object.ajax_url, {
          method: 'POST',
          body: data,
        })
        .then(response => response.json())
        .then(data => {
          // Reset button text after receiving the results with SVG
          netoolBtn.innerHTML = `
            <span>Generate</span>
            <svg viewBox="0 0 20 20" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
              <g stroke-width="0"></g>
              <g stroke-linecap="round" stroke-linejoin="round"></g>
              <path d="m8.75 3.75.625-1.25 1.25-.625-1.25-.625L8.75 0l-.625 1.25-1.25.625 1.25.625zm-5.625 2.5 1.041-2.083L6.25 3.125 4.166 2.083 3.125 0 2.084 2.083 0 3.125l2.084 1.042zm13.75 5-1.041 2.083-2.084 1.042 2.084 1.042 1.041 2.083 1.041-2.083L20 14.375l-2.084-1.042zm2.759-7.569L16.319.366a1.246 1.246 0 0 0-1.767 0L.366 14.552a1.25 1.25 0 0 0 0 1.768l3.314 3.314c.244.244.564.366.884.366s.64-.122.884-.366L19.633 5.448a1.25 1.25 0 0 0 0-1.767m-5.592 4.267-1.989-1.989 3.383-3.383 1.989 1.989z"/>
            </svg>`;
          netoolBtn.disabled = false;

          // Data to insert
          const dataEl = document.createElement('div');
          dataEl.classList.add('generated-result');

          const dataRowEl = document.createElement('div');
          dataRowEl.classList.add('row', 'row-gap', 'justify-content-center');

          if (data?.data) {
            const afterOfEl = document.getElementsByClassName('noome-tool-box')[0];

            data.data.forEach(name => {
              const dataColEl = document.createElement('div');
              dataColEl.classList.add('col-lg-3', 'col-md-6');

              const dataResEl = document.createElement('div');
              dataResEl.classList.add('result');
              dataResEl.innerText = name;

              dataColEl.appendChild(dataResEl);

              dataRowEl.appendChild(dataColEl);

            });

            dataEl.appendChild(dataRowEl);

            afterOfEl.parentNode.insertBefore(dataEl, afterOfEl.nextSibling);
          } else {
            const dataColEl = document.createElement('div');
            dataColEl.classList.add('col-lg-12');

            const dataResEl = document.createElement('div');
            dataResEl.classList.add('error');
            dataResEl.innerText = data?.message;

            dataColEl.appendChild(dataResEl);
            dataRowEl.appendChild(dataColEl);
            dataEl.appendChild(dataRowEl);

            const afterOfEl = document.getElementsByClassName('noome-tool-box')[0];
            afterOfEl.parentNode.insertBefore(dataEl, afterOfEl.nextSibling);
          }
        })
        .catch(error => {
          // Reset button text with SVG if there's an error
          netoolBtn.innerHTML = `
            <span>Generate</span>
            <svg viewBox="0 0 20 20" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
              <g stroke-width="0"></g>
              <g stroke-linecap="round" stroke-linejoin="round"></g>
              <path d="m8.75 3.75.625-1.25 1.25-.625-1.25-.625L8.75 0l-.625 1.25-1.25.625 1.25.625zm-5.625 2.5 1.041-2.083L6.25 3.125 4.166 2.083 3.125 0 2.084 2.083 0 3.125l2.084 1.042zm13.75 5-1.041 2.083-2.084 1.042 2.084 1.042 1.041 2.083 1.041-2.083L20 14.375l-2.084-1.042zm2.759-7.569L16.319.366a1.246 1.246 0 0 0-1.767 0L.366 14.552a1.25 1.25 0 0 0 0 1.768l3.314 3.314c.244.244.564.366.884.366s.64-.122.884-.366L19.633 5.448a1.25 1.25 0 0 0 0-1.767m-5.592 4.267-1.989-1.989 3.383-3.383 1.989 1.989z"/>
            </svg>`;
          netoolBtn.disabled = false;

          console.error('Error:', error);
        });
    });
  });
</script>





<!-- tools script  End-->