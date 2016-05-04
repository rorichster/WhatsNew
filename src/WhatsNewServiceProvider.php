<?php namespace Rorichster\WhatsNew;

use Illuminate\Support\ServiceProvider;

class WhatsNewServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	*/
	public function boot()
	{
		$this->publishes([
			__DIR__ . '/../config/whatsnew.php' => config_path('whatsnew.php'),
		], 'config');

		if(!$this->migrationHasAlreadyBeenPublished()) {
			// Publish migration
			$timestamp = date('Y_m_d_His', time());

			$this->publishes([
				__DIR__ . "/../migrations/create_whats_new_table.php" => database_path("/migrations/{$timestamp}_create_whats_new_table.php"),
			], 'migrations');
		}

		if(is_dir(base_path() . '/resources/views/rorichster/whatsNew'))
		{
			$this->loadViewsFrom(base_path() . '/resources/views/rorichster/whatsNew', 'whatsnew');
		} else {
			$this->loadViewsFrom(__DIR__ . '/../views', 'whatsnew');
		}

		$this->publishes([
			__DIR__ . '/../views' => base_path('/views/rorichster/whatsnew'),
		]);
	}

	/**
	* Register the application services.
	*
	* @return void
	*/
	public function register()
	{
		include __DIR__ . '/routes.php';
		$this->app->make('Rorichster\WhatsNew\Controllers\WhatsNewController');
	}

	protected function migrationHasAlreadyBeenPublished()
	{
		$files = glob(database_path('/migrations/*_create_whats_new_table.php'));

		return count($files) > 0;
	}
}