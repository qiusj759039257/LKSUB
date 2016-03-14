<?php

$flist = scandir(".");
$htbl = [];

if (!file_exists("duplicate")) {
	mkdir("duplicate");
}

foreach ($flist as $file) {
	if (in_array($file, [".", "..", basename(__FILE__)]) or is_dir($file)) {
		continue;
	}

	$hash = sha1_file($file);
	if (in_array($hash, $htbl)) {
		rename($file, "duplicate/{$file}");
		echo "Duplicate {$file}" . PHP_EOL;
	} else {
		$htbl[] = $hash;
	}
}