<?php

/*
 * Here goes the application configuration.
 */
return [
    /*
     * Here goes the application name.
     */
    'name' => 'Professor Oak',
    /*
     * Here goes the application version.
     */
    'version' => '1.0.1',
    /*
     * Here goes the application default command. By default
     * the list of commands will appear. All commands
     * application commands will be auto-detected.
     *
     * 'default-command' => App\Commands\HelloCommand::class,
    */
    'commands' => [
        App\Commands\FetchImageMetadata::class,
        App\Commands\DownloadImages::class,
        App\Commands\NormalizeImages::class,
        App\Commands\PrepareDataset::class,
        App\Commands\CreateFreshDataset::class
    ],

    /*
     * If true, development commands won't be available as the app
     * will be in the production environment.
     */
    'production' => false,
    /*
     * If true, scheduler commands will be available.
     */
    'with-scheduler' => false,
    /*
     * Here goes the application list of Laravel Service Providers.
     * Enjoy all the power of Laravel on your console.
     */
    'providers' => [
        App\Providers\AppServiceProvider::class,
    ],
];
