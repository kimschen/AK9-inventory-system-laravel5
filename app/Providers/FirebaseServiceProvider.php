<?php

namespace App\Providers;

use Kreait\Firebase;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory as FirebaseFactory;
use Illuminate\Support\ServiceProvider;

class FirebaseServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(Firebase::class, function() {
            return (new FirebaseFactory())
            ->withServiceAccount(ServiceAccount::fromJsonFile('FIREBASE_SERVICE_ACCOUNT'))
            ->withDatabaseUri('FIREBASE_DATABASE_URI')
            ->create();
        });

        $this->app->alias(Firebase::class, 'firebase');
    }
}
