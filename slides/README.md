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

Yup. Just change your `add-grid` argument.

```
  add-grid(X);     // X equal columns
  add-gutter(1/3); // Intercolumn space is one third the width of one column
```

> Graphic animating the changes in the value of X: 12 -> 10 -> 7 -> 5

Couldn't do tenths, sevenths, or fifths before, now could ya?

--------------------------------------------------------------------------------

# Asymmetric Grids

Singularity has two basic ways to specify the number of columns. When an integer
is provided (as you've seen), that number of equal columns is created. But:

## Singularity's `add-grid` argument can be a list instead

I've shown you this:

```
  add-grid(4);     // Four equal columns
```

You could also write that this way:

```
  add-grid(1 1 1 1);     // Four equal columns
```

## Asymmetric Columns = Varied Widths

```
  add-grid(1 1 1 1);     // Four columns
```

> Animation: Change a `1` to `2`

> Something which implies "BOOM"

## This is useful why, exactly?

I **could not** make myself think this way and stuck to my comfy 12-column
approach. Then I needed to change the width of one column. That sucked.

> Animate a find and replace of `grid-span` statements.

_We use Sass because `CTRL-F` should not be a development tool._

## Changing Thought Processes

This one is hard. Here's how I do it:

It's not about the first, second, third, etc. column. It's about the main column
and the rail. It's about the side-by-side with the sidebar. It's about the left
nav and the body and the sidebar with the filters and the ads.

## Do Those Words Sound Familiar?

**They should. Those are words that designers use.**

```
  // Not real code:
  add-grid( LeftNav BodyArea RightRail );
```

**Create grids for your content. Don't cram your content into prefab fractions.**

## Examples In Action

> - Texas Exes with overlay
> - World Pulse with overlay

--------------------------------------------------------------------------------

# Another Example: Meet Aunt Flossy

> "She's a ..." (something really crazy, like knocker-up, coconut safety engineer, dice inspector, pet food taster, etc.)

Let's review her r&eacute;sum&eacute;.

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
