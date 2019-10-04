<?php

$scale = 100000;

if (!file_exists('lib/Models')) {
	mkdir('lib/Models', 0777, true);
}

// generate subclass files
for ($i=1; $i<=$scale; $i++) {
	file_put_contents("./lib/Models/SubClass{$i}.php",
<<<PHPCODE
<?php

namespace Framework\Models;

class SubClass{$i} {
  public static function example() {
    return '';
  }
}
PHPCODE
  );
}

// generate the example1 class
$fh = fopen('lib/Example1.php', 'w');
fwrite($fh, "<?php\n\n");
fwrite($fh, "namespace Framework;\n\n");
for ($i=1; $i<=$scale; $i++) {
	fwrite($fh, "use Framework\Models\SubClass{$i};\n");
}
fwrite($fh, "\n");
fwrite($fh, "class Example1 {\n");
for ($i=1; $i<=$scale; $i++) {
	fwrite($fh, "    public function runSubClass{$i}() { return SubClass{$i}::example(); }\n");
}
fwrite($fh, "}\n");

// generate the example2 class
$fh = fopen('lib/Example2.php', 'w');
fwrite($fh, "<?php\n\n");
fwrite($fh, "namespace Framework;\n\n");
fwrite($fh, "use Framework\Models;\n");
fwrite($fh, "\n");
fwrite($fh, "class Example2 {\n");
for ($i=1; $i<=$scale; $i++) {
	fwrite($fh, "    public function runSubClass{$i}() { return Models\\SubClass{$i}::example(); }\n");
}
fwrite($fh, "}\n");
