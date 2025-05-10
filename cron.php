<?php
// cron_build.php

// Run npm build command
$command = 'cd /path/to/your/laravel/project && npm install && composer install && npm run build ';
$output = shell_exec($command);

// Optional: Log the output
file_put_contents('/path/to/your/laravel/project/cron_output.log', $output, FILE_APPEND);

echo $output;
?>
