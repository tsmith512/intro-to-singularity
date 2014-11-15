<?php
  $title = 'Twelve Column Examples';
  $stylesheet = 'twelve';
  include 'includes/header.php';
?>

  <h3>Basic 12 column grid:</h3>
  <p>
    A simple twelve column grid a child item one-column wide.
  </p>
  <div class="container twelve-column">
    <div class="item"><div class="caption get-width"></div></div>
  </div>

  <p>
    The same grid, with child items which span multiple columns using
    <code class="language-scss">grid-span()</code>
  </p>
  <div class="container twelve-column">
    <div class="cyan"><div class="caption get-width"></div></div>
    <div class="magenta"><div class="caption get-width"></div></div>
    <div class="yellow"><div class="caption get-width"></div></div>
    <div class="black"><div class="caption get-width"></div></div>
  </div>
  <p>
    Remember that the background grid is created using CSS3 gradients and is not
    an exact match for the layout. If the columns and background grid are off,
    <em>the columns are correct</em> and the grid may not be. Learn more about
    that at in the
    <a href="https://github.com/at-import/Singularity/wiki/Creating-Grids#visualizing-your-grids">Visualizing your Grids</a>
    section of Singularity's documentation.
  </p>

<?php include 'includes/footer.php'; ?>
