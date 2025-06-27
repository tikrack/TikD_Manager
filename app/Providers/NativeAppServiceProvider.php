<?php

namespace App\Providers;

use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Facades\Notification;
use Native\Laravel\Facades\Window;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
            ->minWidth(900)
            ->minHeight(600)
            ->title("Internet Download Manager")
            ->hideDevTools()
            ->hideMenu(true);

        Notification::title('Hello from NativePHP')
            ->message('This is a detail message coming from your Laravel app.')
            ->show();
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [];
    }
}
