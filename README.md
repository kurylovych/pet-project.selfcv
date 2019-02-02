
`npm run watch` - a command to watch changes.
`php artisan serve` - start the server on local.

Database: 
  dbname is **edestdb** 
  user is **edestadmin@localhost**
  password is **edestpswd**


`php artisan make:controller ExampleController` - a command to create a controller.
`php artisan make:controller ExampleController --resource` - where *--resource* flag will create a crud template in controller. 

`php artisan make:model Example -m` - a command to create a model, where `-m` flag is for *migrations*.
  `php artisan migrate` - a command to execute earlier created migration.
  `php artisan make:migration add_fileds_to_` - a command to add fields to a model.

`php artisan tinker` - a command that allows to interact with entire Laravel app on the command line(events, jobs ,ORM, etc.).
  To access model *Example* we have to type `App\Example`, where *App* is a folder where all models are located.

  Example of creating data through tinker:
  ```
    $about = new App\About();
    $about->title = 'About Title';
    $about->body = 'About Body';
    $about->save();
  ```

`php artiasn route:list` - a command to see all the routes in the project.

In *routes/web.php* to use crud root instead of typing all roots manualy we can do `Route::resource('example', 'ExampleController');`


# PHPStorm
`pgrep -f phpstorm` - to find all phpstorm processes.
`kill -9 $(pgrep -f phpstorm)` - to kill them all.