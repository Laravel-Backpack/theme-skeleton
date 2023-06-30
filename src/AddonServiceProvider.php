<?php

namespace :uc:vendor\:uc:package;

use Backpack\CRUD\ThemeServiceProvider;

class AddonServiceProvider extends ThemeServiceProvider
{
    protected $vendorName = ':kc:vendor';
    protected $packageName = ':kc:package';
}
