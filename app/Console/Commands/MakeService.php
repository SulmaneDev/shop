<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakeService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Example usage:
     * php artisan app:make-service User
     */
    protected $signature = 'app:make-service {name : The name of the service}';

    /**
     * The console command description.
     */
    protected $description = 'Create a new service class inside app/Services/{name}/{name}Service.php';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = Str::studly($this->argument('name')); 
        $folderPath = app_path("Services/{$name}");
        $filePath = "{$folderPath}/{$name}Service.php";

        $filesystem = new Filesystem();

        
        if (!$filesystem->isDirectory($folderPath)) {
            $filesystem->makeDirectory($folderPath, 0755, true);
            $this->info("Created directory: {$folderPath}");
        }

        
        if ($filesystem->exists($filePath)) {
            $this->error("Service already exists: {$filePath}");
            return Command::FAILURE;
        }

        
        $stub = <<<PHP
<?php

namespace App\Services\\{$name};

class {$name}Service
{
    public function __construct()
    {
        
    }

    
}
PHP;

        $filesystem->put($filePath, $stub);
        $this->info("Service created: {$filePath}");

        return Command::SUCCESS;
    }
}
