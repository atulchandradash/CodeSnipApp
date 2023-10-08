<?php

namespace App\Providers;

use App\Models\Folder;
use Illuminate\Support\ServiceProvider;

class VeriablePassServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $user = auth()->user();
            if ($user) {
                $GetFolder = Folder::where('user_id', $user->id)->get();
                if ($GetFolder) {
                    $view->with('GetFolder', $GetFolder);
                }
            }


        });
    }
}
