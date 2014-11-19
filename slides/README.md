# Session Description

Singularity lets you toss out your old, stodgy grid system and create a system
of columns and gutters that actually works with your content, allowing different
layouts at different breakpoints, a visual order that isn't tied to your source
order, and no more terrible class names.

# Introduction to Singularity Grids

## You Probably Already Know

## Tellin' 'em what yer gonna tell 'em:

## Presenting like an Airplane: High-level and Fast

--------------------------------------------------------------------------------

# What was 960?

# Why so many 12 column grids?

# What is Singularity?

## Going from 960 (or whatever) to Singularity

## That's all, folks!

## Spanning that 12-column grid

## Weren't we escaping the 12-column menace?

# Asymmetric Grids

## Singularity's `add-grid` argument can be a list instead

## Asymmetric Columns = Varied Widths

## This is useful why, exactly?

> Animate a find and replace of `grid-span` statements.

## Changing Thought Processes

## Do Those Words Sound Familiar?

## Examples In Action


--------------------------------------------------------------------------------

# Another Example: Meet Aunt Flossy

> - Resume with overlay

## But This R&eacute;sum&eacute; should be Responsive

Duh.

> - Animation of growing and shrinking window _without responsive layout_

## If you used Susy Grids, you think you've already solved this problem, don't you?

- Wide: `@include grid-span(6, 6);` (second 6 of 12 columns, or whatever)
- Narrow:  `@include grid-span(12, 12);` or just `width:100%`

Nope.

## Singularity allows different Grids at Different Sizes:

At its widest, this resume uses this grid:

``` scss
  @include add-grid(1 2 2 3 1);
```

But Singularity allows me to use different grids at different sizes. These are
the grids now in use in production:

``` scss
  @include add-grid(2);
  @include add-grid(1 2 2 at 850px);
  @include add-grid(1 2 2 3 1 at 1000px);
  @include add-gutter(1/8);
  @include add-gutter(1/4 at 850px);
```

> Animation of grid system

## Singularity and Breakpoint play well together:

Combine this with [Breakpoint](http://breakpoint-sass.com/) calls like so:

``` scss
  $headers-left: 850px;
  $details-horizontal: 1000px;

  @include add-grid(2);
  @include add-grid(1 2 2 at 850px);
  @include add-grid(1 2 2 3 1 at 1000px);

  h2 { // Subheaders "Work", "Education", etc.
    text-align: center;
    font-size: 3em;

    @include breakpoint($headers-left) {
      @include grid-span(1,1);
      text-align: right;
      font-size: 2em;
    }

    @include breakpoint($details-horizontal) {
      @include grid-span(1,1); // Still 1,1; but in a different grid!
    }
  }
```

**Note:** just having multiple grids defined isn't enough. You need to call
`grid-span` inside a `breakpoint` to trigger the new layout. Occasionally, this
will mean repeating yourself (esp. in the case of `grid-span(1,1)`), but the
second call would be on a different grid system, so the output is new.

--------------------------------------------------------------------------------

# Look Closer

> Animation of the resume which shows the change in visual order from source order

# Yeah this part isn't finished yet.

--------------------------------------------------------------------------------

# Tellin' em' what ya told 'em:

- Singularity is a new kind of grid system which lets you write grids to your
  content, not a convenient least-common-multiple.
- Columns can be equal width "Symmetric" or varied in width "Asymmetric".
- Singularity plays nicely with Breakpoint so that:
  - You can have different column layouts at different sizes.
  - Your "visual" order doesn't have to match your "source" order.

# Thank You

Taylor Smith  
tsmith512 on Twitter, LinkedIn, GitHub, Facebook  
Designer / Frontend Dev at Four Kitchens

_These slides and example materials are all on the Internet._
