<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-07-19 15:33:07
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Paypal\Console\Commands;

use Nicelizhi\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'Paypal:uninstall';

    protected $description = 'Uninstall Paypal an app';

    public function getAppVer() {
        return config("Paypal.ver");
    }

    public function getAppName() {
        return config("Paypal.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Paypal UnInstall cannelled");
            return false;
        }
    }
}