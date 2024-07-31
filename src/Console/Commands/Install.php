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

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'Paypal:install';

    protected $description = 'Install Paypal an app';

    public function getAppVer() {
        return config("Paypal.ver");
    }

    public function getAppName() {
        return config("Paypal.name");
    }

    public function handle()
    {
        $this->info("Install app: Paypal");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Paypal Install cannelled");
            return false;
        }
    }
}