<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Dispatcher $events)
    {

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MAIN NAVIGATION');
            if (auth()->user()->type == 'admin') {
                $event->menu->add(
                    [
                        'text' => 'Dashboard',
                        'url' => 'admin/home',
                        'icon' => 'fas fa-fw fa-home',
                    ],
                    ['header' => 'VALAS'],
                    [
                        'text' => 'Valas',
                        'url' => 'admin/valas',
                        'icon' => 'far fa-fw fa-file',
                    ],
                    [
                        'text' => 'Customer',
                        'url' => 'admin/customer',
                        'icon' => 'fas fa-fw fa-user',
                    ],
                    ['header' => 'TRANSAKSI'],
                    [
                        'text' => 'Transaksi',
                        'url' => 'admin/transaksi',
                        'icon' => 'fas fa-fw fa-money-check',
                    ],
                );
            } elseif (auth()->user()->type == 'super-admin') {
                $event->menu->add(
                    [
                        'text' => 'Dashboard',
                        'url' => 'super-admin/home',
                        'icon' => 'fas fa-fw fa-home',
                    ],
                    ['header' => 'VALAS'],
                    [
                        'text' => 'Valas',
                        'url' => 'super-admin/valas',
                        'icon' => 'far fa-fw fa-file',
                    ],
                    [
                        'text' => 'Customer',
                        'url' => 'super-admin/customer',
                        'icon' => 'fas fa-fw fa-user',
                    ],
                    [
                        'text' => 'Membership',
                        'url' => 'super-admin/membership',
                        'icon' => 'fas fa-fw fa-lock',
                    ],
                    ['header' => 'TRANSAKSI'],
                    [
                        'text' => 'Transaksi',
                        'url' => 'super-admin/transaksi',
                        'icon' => 'fas fa-fw fa-money-check',
                    ],
                    [
                        'text' => 'Detail Transaksi',
                        'url' => 'super-admin/detailTransaksi',
                        'icon' => 'fas fa-fw fa-money-check-alt',
                    ],
                );
            } else {
                $event->menu->add([
                    'text' => 'Dashboard',
                    'url' => 'user/home',
                    'icon' => 'fas fa-fw fa-home',
                ]);
            }
        });
    }
}
