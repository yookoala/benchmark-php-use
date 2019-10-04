# Autoloading Benchmark

Aims to test if there is performance difference between:

1. multiple `use` statements to the subclass; and
2. a single `use` statement to the parent namespace.

## Preparation

Run the generation script first:

```
php gen.php
```

Then run the 2 examples separately:
```
php example1.php
php example2.php
```

[1]: https://stackoverflow.com/questions/58231277/composer-autoload-performance
