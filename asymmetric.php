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

<?php include 'includes/footer.php'; ?>
