<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class CrudGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'amr:crud
    {name : Class (singular) for example User}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUD operations';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $this->service($name);
        $this->controller($name);
        $this->model($name);

        File::append(
            base_path('routes/api.php'),
            'use App\Http\Controllers\API\\' . $name . "Controller;"
        );
        File::append(
            base_path('routes/api.php'),
            'Route::resource(\'' . strtolower($name) . "', {$name}Controller::class);"
        );
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function model($name)
    {

        Artisan::call("make:migration create" . Str::plural($name) . "_table");

        $modelTemplate = str_replace(
            ['{{modelName}}', '{{modelNameSingularLowerCase}}'],
            [
                $name,
                strtolower($name)
            ],
            $this->getStub('Model')
        );

        file_put_contents(app_path("/Models/{$name}.php"), $modelTemplate);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Http/Controllers/API/{$name}Controller.php"), $controllerTemplate);
    }

    protected function service($name)
    {
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Service')
        );

        file_put_contents(app_path("/Services/{$name}Service.php"), $template);
    }
}
