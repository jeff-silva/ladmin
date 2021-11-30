<?php

namespace App\Console\Commands;

class AppMakeEnv extends AppBase
{
    protected $signature = 'app:make-env';
    protected $description = 'Gera arquivo /client/store/env.js';

    public function handle()
    {   
        $env['exportExtensions'] = \App\Formats\Formats::all();

        $env = json_encode($env, JSON_PRETTY_PRINT);

        file_put_contents(base_path('/client/store/env.js'), "/* Este arquivo é gerado, não edite-o diretamente */\nexport const state = {$env};");
        file_put_contents(base_path('/client/store/env.js'), implode("\n", [
            '/* Este arquivo é gerado via script, não edite-o diretamente.',
            'Para alterar as variáveis guardadas aqui edite o comando app/Console/Commands/AppMakeEnv.php',
            'Para gerar este arquivo execute os comandos "php artisan app:make-env"',
            'ou "php artisan app:dev" */',
            '',
            "export const state = {$env};",
        ]));
    }
}
