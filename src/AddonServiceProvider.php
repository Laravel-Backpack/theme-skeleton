<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = ':kc:vendor';
    protected $packageName = ':kc:package';
    protected $commands = [];
}
