<?php
exec('ffmpeg -format 2>&1', $output);
var_dump($output);
?>