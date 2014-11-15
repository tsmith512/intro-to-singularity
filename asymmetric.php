<?php
  $title = 'Asymmetric Grids';
  $stylesheet = 'asymmetric';
  include 'includes/header.php';
?>

  <h3>Specify Grids as a List:</h3>
  <p>
    In addition to the <code class="language-scss">add-grid(X)</code> syntax,
    grids can also be specified as a list like this,
    <code class="language-scss">@include add-grid(1 1 1 1)</code>:
  </p>
  <div class="container four-column">
    <div class="item"><div class="caption get-width"></div></div>
  </div>

  <h3>Asymmetric Grids:</h3>
  <p>
    So what if we changed one of those to a 2 like this,
    <code class="language-scss">@include add-grid(1 2 1 1)</code>?
  </p>
  <div class="container asymmetric">
    <div class="item"><div class="caption get-width"></div></div>
    <div class="item2"><div class="caption get-width"></div></div>
  </div>

  <h3>More Examples:</h3>

  <p>
    This allows grids to be created for a purpose, instead of by creating boxes
    which are multiples of equal columns. Also,
    <code class="language-scss">@include grid-span()</code> rules can be added
    to elements or classes directly within CSS, meaning that no presentational
    classes littering your markup are required to make these work.
  </p>

  <p><strong>Example 3:</strong> <code class="language-scss">@include add-grid(2 6)</code></p>
  <div class="container example-3">
    <div class="item"><div class="caption">Left Nav</div></div>
    <div class="item2"><div class="caption">Main Body</div></div>
  </div>

  <p><strong>Example 4:</strong> <code class="language-scss">@include add-grid(2 4 2)</code></p>
  <div class="container example-4">
    <div class="item"><div class="caption">Left Nav</div></div>
    <div class="item2"><div class="caption">Main Body</div></div>
    <div class="item3"><div class="caption">Right Rail</div></div>
  </div>

<?php include 'includes/footer.php'; ?>
