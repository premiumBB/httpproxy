<?php

$files = ['cancel.html', 'index.html', 'success.html'];
$replaces = ['header.html', 'hero_marketing.html', 'pricing_call_footer.html', 'scripts.html'];

foreach ($files as $file)
{
	$content = file_get_contents($file);
	foreach ($replaces as $replace)
	{
		$content = str_replace("INCLUDE '$replace'", file_get_contents('./src/' . $replace), $content);
	}
	file_put_contents('./docs/' . $file, $content);
}
