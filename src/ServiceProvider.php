<?php

namespace Josecaseiro\AngolanGeo;

use Illuminate\Support\ServiceProvider as Provider;
use Illuminate\Support\Facades\Artisan;

class ServiceProvider extends Provider
{
    public function boot()
    {
        // Executar o seeder aqui
        $this->app->booted(function () {
            // Mensagem informativa antes de executar as migrações
            $this->info('**Running AngolanGeo migrations...**', 'comment');

            // Executar as migrações diretamente do Service Provider
            $outputMigrate = Artisan::output();
            Artisan::call('migrate', [
                '--path' => __DIR__ . '/migrations',
            ]);
            $this->outputCommandResults('Migration', $outputMigrate);

            // Mensagem informativa antes de executar o seeder
            $this->info('**Running AngolanGeo seeder...**', 'comment');

            // Executar o seeder aqui
            $outputSeeder = Artisan::output();
            Artisan::call('db:seed', [
                '--class' => 'Josecaseiro\\AngolanGeo\\Seeders\\AngolanGeoDatabaseSeeder'
            ]);
            $this->outputCommandResults('Seeder', $outputSeeder);
        });
    }

    public function register()
    {
        //
    }

    // Método auxiliar para exibir mensagens informativas
    protected function info($message, $style = null)
    {
        $styles = [
            'comment' => 'fg=white;bg=yellow',
            'info' => 'fg=black;bg=green',
        ];

        $this->line("<fg=black;bg=white;options=bold>[AngolanGeo]</> <fg={$styles[$style]}>$message</>");
    }

    // Método auxiliar para exibir resultados dos comandos
    protected function outputCommandResults($commandName, $output)
    {
        if (!empty(trim($output))) {
            $this->line("\n<fg=black;bg=white;options=bold>[{$commandName} Output]</>");
            $this->line($output);
        }
    }
}
