<?php

// These rules are followed when using the Jeroen-G/laravel-packager tool.
// When you run `php artisan packager:new` it will loop through the 
// rules below and replace the filenames according to them.
// 
// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
// 
// You do NOT need this file in your Backpack addon, only in skeletons.
// So it's safe to delete once you've created your Backpack addon.
return [
    'config/mypackage.php' => 'config/:lc:package.php',
    'routes/mypackage.php' => 'routes/:lc:package.php',
    'src/resources/lang/en/mypackage.php' => 'src/resources/lang/en/:lc:package.php',
];