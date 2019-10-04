<?php

spl_autoload_register(function ($class) {
	if (preg_match('/^Framework\\\\Models\\\\(.+?)$/', $class, $matches)) {
		include_once __DIR__ . '/../lib/Models/' . $matches[1] . '.php';
	} elseif (preg_match('/^Framework\\\\(.+?)$/', $class, $matches)) {
		include_once __DIR__ . '/../lib/' . $matches[1] . '.php';
	}
});

