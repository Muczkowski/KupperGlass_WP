<?php
include('minifier.php');

$output_file = 'compressed.js';
$input_dir = '*';

$files = glob($input_dir . '/*.js');
$js = '';
foreach($files as $file) {
    $js .= file_get_contents($file) . PHP_EOL;
}

$minifiedCode = \JShrink\Minifier::minify($js, array('flaggedComments' => false));
file_put_contents($output_file, $minifiedCode);
echo "<script>window.close();</script>";
?>