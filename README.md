# Autoloading Benchmark

Aims to test [if there is performance difference][1] between:

1. multiple `use` statements to the subclass; and
2. a single `use` statement to the parent namespace.

[1]: https://stackoverflow.com/questions/58231277/composer-autoload-performance


## Preparation

Run the generation script first:

```
php gen.php
```

Then run the 2 examples separately:
```
php example1.php; php example2.php
```

## Result

We are testing a ridiculous number (100,000) of subclass here. The difference might
not be relevant in real life situation. But there is consistent difference between
the 2 examples on my machine:

```
Example 1 executed in 0.202406
Example 2 executed in 0.159941
```

The 0.04s difference is probably the time need to parse the 999,999 more `use`
statements.
