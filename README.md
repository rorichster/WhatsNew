# Laravel 5 Simple application to add What's New
Simple app to add version and changes to your app. This I used in my projects to easy provide changes to clients through API.


## Installation
**Install the Package via Composer:**

```shell
$ composer require rorichster/whatsnew
```

** Add the Service Provider to your ```config/app.php``` file:**

```php
'providers' => array(
	...
	Rorichster\WhatsNew\WhatsNewServiceProvider::class,
	...
)
```

Publish package's files:

```shell
$ php artisan vendor:publish
```

Run database migrations:

```shell
$ php artisan migrate
```

## Usage
Point to /whatsnew and you will able to view already inserted versions. Or create new. Enjoy.