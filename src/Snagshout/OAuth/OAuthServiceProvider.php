<?php
/**
 * @author     Dariusz Prząda <artdarek@gmail.com>
 * @copyright  Copyright (c) 2013
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */

namespace Snagshout\OAuth;

use Illuminate\Support\ServiceProvider;

class OAuthServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('oauth', function ($app) {
            // create oAuth instance
            $oauth = new OAuth();
            // return oAuth instance
            return $oauth;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('oauth');
    }
}