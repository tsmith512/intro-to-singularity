# Introduction to Singularity Grids

Taylor Smith
tsmith512 on Twitter, LinkedIn, GitHub, Facebook
Designer / Frontend Dev at Four Kitchens

## You Probably Already Know

You're here at ATXSass, so I'm assuming you know about these things:

- [Sass](http://sass-lang.com/)
- [Compass](http://compass-style.org/)
- How to get them running on a project with [Bundler](http://bundler.io/)
- Have used at least one grid system or framework like
  [960](http://960.gs/), [Bootstrap](http://getbootstrap.com/examples/grid/),
  [Foundation](http://foundation.zurb.com/grid.html), or [Susy](http://susy.oddbird.net/)

## Tellin' 'em what yer gonna tell 'em:

- [Singularity](http://singularity.gs/): "Grids without Limits" will
- _Meets your needs:_  
  Create your own grid system, just the way you want it.
- _Not let the tool dictate the outcome:_  
  You've probably never _really_ needed 12 columns, you just needed fractions.
- _Not tie you to terrible presentation class names:_  
  `.push-3`, `.col-md-8`, or `.large-8` don't mean anything; it's litter
- _Let you make different types of grids:_  
  Symmetric (equal-width column) or Asymmetric (varied width-column) grids
- _Be powerfully responsive:_  
  Addressing and spanning grids with Breakpoint
- _Not let your visual layout be determined by your source order:_
  Awesomeness which cannot be summed in a sentence fragment.
- **Example case:** a r&eacute;sum&eacute;
- **More info:** additional resources and examples

--------------------------------------------------------------------------------

# What was 960?

> Graphic: twelve column grid

# Why so many 12 column grids?

- Math:
- 12 / 2 = 6
- 12 / 3 = 4
- 12 / 4 = 3
- 12 / 6 = 2
- 12 / 12 = 1
- Twelve is a least common multiple for the number of columns you _actually_
  needed. How often did you actually use 12 even columns?
  - (Hint: that's a great use-case for [Flexbox](http://css-tricks.com/snippets/css/a-guide-to-flexbox/).)

# What is Singularity?

Just columns and gutters.

## From 960 (or whatever) to Singularity

> Boost that graphic from Snugug showing what 960gs looks like in Singularity

## That's it?

Yes.
```
  add-grid(12);    // Twelve equal columns
  add-gutter(1/3); // Intercolumn space is one third the width of one column
  .item { @include grid-span(1,1); } // .item is the first column.
```

> Graphic of |**X**|2|3|4|5|6|7|8|9|10|11|12|

## Spanning that 12-column grid

```
  .cyan    { @include grid-span(1,1); }
  .magenta { @include grid-span(2,2); }
  .yellow  { @include grid-span(3,4); }
  .black   { @include grid-span(4,8); }
```

> Graphic of |C|M|M|Y|Y|Y|K|K|K|K|11|12|

`grid-span(width, starting-position\*)`

\* Addresses are indexed starting at 1, like how people count stuff.

## Weren't we escaping the 12-column menace?

Yup. Just change your `add-grid` argument.

```
  add-grid(X);     // X equal columns
  add-gutter(1/3); // Intercolumn space is one third the width of one column
```

> Graphic animating the changes in the value of X.

--------------------------------------------------------------------------------

# Asymmetric Grids

Singularity has two basic ways to specify the number of columns. When an integer
is provided (as you've seen), that number of equal columns is created.

## Singularity's `add-grid` argument can be a list

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
nav and the body and the sidebar filters and ads.

## Do Those Words Sound Familiar?

**They should. Those are words that designers use.**

```
  // Not real code:
  add-grid( LeftNav BodyArea RightRail );
```

> Another graphic indicating "BOOM"

## Examples In Action

> - Texas Exes with overlay
> - World Pulse with overlay
> - Resume with overlay