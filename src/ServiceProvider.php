<?php

namespace ZohoCrmApiV2;


class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config' => config_path('zoho-crm-api-v2'),
        ]);

        $this->app->bind('ZohoCrmApiV2\ZohoCrmApiV2', function () {
            return ZohoCrmApiV2::getInstance();
        });

    }

}