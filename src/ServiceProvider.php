<?php

namespace Josecaseiro\AngolanGeo;

use Illuminate\Support\ServiceProvider as Provider;
use Illuminate\Support\Facades\Artisan;

class ServiceProvider extends Provider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->booted(function () {

            // Mensagem informativa antes de executar as migrações
            // $this->info('**Copying AngolanGeo migrations...**', 'comment');

            // Executar as migrações diretamente do Service Provider
            $outputMigrate = Artisan::output();
            $this->loadMigrationsFrom(__DIR__ . '/migrations');

            // copy migrations to the application's database/migrations directory
            $this->publishes([
                __DIR__ . '/migrations' => database_path('migrations'),
            ], 'migrations');

            // copy seeders to the application's database/seeders directory
            $this->publishes([
                __DIR__ . '/Seeders' => database_path('seeders'),
            ], 'seeders');
        });
    }

    // Método auxiliar para exibir mensagens informativas
    protected function info($message, $style = null)
    {
        $styles = [
            'comment' => 'fg=white;bg=green',
            'info' => 'fg=black;bg=green',
        ];

        $this->output("<fg=black;bg=red;options=bold>[AngolanGeo]</> <{$styles[$style]}>$message</>");
    }

    // Método auxiliar para exibir resultados dos comandos
    protected function outputCommandResults($commandName, $output)
    {
        if (!empty(trim($output))) {
            $this->output("\n<fg=green;bg=white;options=bold>[{$commandName} Output]</>");
            if ($output != null)
                $this->output($output);
        }
    }

    // Método auxiliar para imprimir a linha
    protected function output($text)
    {
        // check if its in dev mode
        if (config('app.env') != 'production') {
            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($text);
        }
    }
}
