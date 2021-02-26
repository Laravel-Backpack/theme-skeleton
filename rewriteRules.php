<?php

// These rules are followed when using the Jeroen-G/laravel-packager tool.
// When you run `php artisan packager:new` it will loop through the 
// rules below and replace the filenames according to them.
// 
// Available placeholders:
// - :uc:vendor, :uc:package - UpperCase aka StudlyCase 
// - :lc:vendor, :lc:package - lowercase
// - :kc:vendor, :kc:package - kebab-case
// 
// You do NOT need this file in your Backpack addon, only in skeletons.
// So it's safe to delete once you've created your Backpack addon.
return [
    'config/mypackage.php' => 'config/:kc:package.php',
    'routes/mypackage.php' => 'routes/:kc:package.php',
    'src/resources/lang/en/mypackage.php' => 'src/resources/lang/en/:kc:package.php',
];