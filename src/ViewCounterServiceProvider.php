<?php

namespace ExA2040\LaravelSEO;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ViewCounterServiceProvider extends LaravelServiceProvider {

  use \Illuminate\Console\AppNamespaceDetectorTrait;

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->handleMigrations();
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    //include __DIR__.'/Http/routes.php';
    //$this->app->make('ExA2040\LaravelViewCounter\LikeController');
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    // Register events for view and like
    return array();
  }
  private function handleMigrations() {
    $this->publishes([
      realpath(__DIR__.'/migrations') => $this->app->databasePath().'/migrations',
    ]);
  }
}
