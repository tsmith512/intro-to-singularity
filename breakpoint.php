<?php
  $title = 'Combining Breakpoint and Singularity';
  $stylesheet = 'bp';
  include 'includes/header.php';
?>

  <h3>Responsive Grids:</h3>
  <p>
    By adding <code class="language-scss">@import add-grid(X at 600px)</code>,
    you can specify a new set of grids (or gutter, using the same syntax) at a
    particular min-width breakpoint.
  </p>
  <div class="container example-1">
    <div class="center"><div class="caption">Body</div></div>
    <div class="left"><div class="caption">Left Nav</div></div>
    <div class="right"><div class="caption">Right Rail</div></div>
  </div>
  <p>
    Note that the <em>source order</em> is seen at the narrowest (one-column)
    breakpoint. In this example, the main body is output first, followed by the
    left nav, and then the right rail. But the widest layout lays these out in a
    single row, with the body appearing second.
  </p>
  <p>
    This is possible using Singularity's
    <a href="https://github.com/at-import/Singularity/wiki/Output-Styles"><em>Isolation</em> output style</a>.
    It works best when rearranging content which will ultimately be in one "row,"
    but by adding some <code class="language-css">clear</code> rules after the
    <code class="language-scss">@include grid-span()</code> rules, you can
    achieve a lot of flexibility.
  </p>

  <p><strong>Example 2:</strong> Four columns, but different widths at different sizes</p>
  <div class="container example-2">
    <div class="item1"><div class="caption get-width"></div></div>
    <div class="item2"><div class="caption get-width"></div></div>
    <div class="item3"><div class="caption get-width"></div></div>
    <div class="item4"><div class="caption get-width"></div></div>
  </div>

  <p>
    Note that the <em>grid</em> changes at 900px, but the adjustment doesn't
    happen until 1000px. <strong>Singularity won't try to read your mind and make
    automatic adjustments for you.</strong> If you want to rearrange your items
    each time the grid changes, you'll need to make a breakpoint when the grid
    changes.
  </p>
  <p>
    This is useful if you wanted to set up a two or three column display in a
    nested area and just keep it as your grid continues to change at larger
    sizes. It does mean you may write the same
    <code class="language-scss">@include grid-span()</code> declaration twice,
    but keep in mind that the rule has a different output because the grid
    context has changed.
  </p>

<?php include 'includes/footer.php'; ?>
