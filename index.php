<?php
  $title = 'Table of Contents';
  $stylesheet = 'toc';
  include 'includes/header.php';
?>

  <h3>Wrap-Up</h3>

  <div class="toc">
    <div class="intro">
      <h4>Thank You</h4>
      <p>
        Thanks for attending my presentation today. Compiled here, you'll find
        the slides, examples, and references I discussed.
      </p>
    </div>
    <div class="references">
      <h4>References</h4>
      <ul>
        <li><strong><a href="slides/index.html">Presentation Slides</a></strong></li>
        <li><strong><a href="resume.html">Aunt Flossie's Resume</a></strong></li>
        <li><h5>Projects</h5>
          <ul>
            <li><a href="http://sass-lang.com/">Sass</a></li>
            <li><a href="http://compass-style.org/">Compass</a></li>
            <li><a href="http://bundler.io/">Bundler</a></li>
            <li><a href="http://singularity.gs/">Singularity</a></li>
            <li><a href="https://github.com/at-import/Singularity-extras">Singularity Extras</a></li>
            <li><a href="http://breakpoint-sass.com/">Breakpoint</a></li>
            <li><a href="https://github.com/at-import/toolkit">Toolkit</a></li>
          </ul>
        </li>
        <li><h5>Documentation</h5>
          <ul>
            <li>Paul Irish: <a href="http://www.paulirish.com/2012/box-sizing-border-box-ftw/">* { Box-sizing: Border-box } FTW</a></li>
            <li>Singularity: <a href="https://github.com/at-import/Singularity/wiki/Creating-Grids#symmetric-grids">Symmetric Grids</a></li>
            <li>Singularity: <a href="https://github.com/at-import/Singularity/wiki/Creating-Grids#asymmetric-grids">Asymmetric Grids</a></li>
            <li>Singularity: <a href="https://github.com/at-import/Singularity/wiki/Output-Styles">Output Styles: Float vs. Isolation</a></li>
            <li>Snugug: <a href="http://snugug.com/musings/bulletproof-combo-fixed-and-fluid-grids-css3-calc">Bulletproof Combo Fixed and Fluid Grids with Css3 Calc</a></li>
            <li>CSS-Tricks: <a href="http://css-tricks.com/snippets/css/a-guide-to-flexbox/">A Guide to Flexbox</a></li>
          </ul>
        </li>
        <li><h5>Other Presentations</h5>
          <ul>
            <li>Snugug: <a href="http://snugug.github.io/responsive-grids/">Responsive Grids</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="index">
      <h4>Examples</h4>
      <ul>
        <li><a href="twelve.php">Twelve Column Grid</a> Building and spanning a standard twelve column grid with Singularity</li>
        <li><a href="asymmetric.php">Asymmetric Grids</a> Building columns of varied width which focus on your content instead of prefabricated fractions</li>
        <li><a href="breakpoint.php">Adding Breakpoint</a> Building responsive grid systems with Breakpoint and Singularity together</li>
      </ul>
    </div>
  </div>

<?php include 'includes/footer.php'; ?>
