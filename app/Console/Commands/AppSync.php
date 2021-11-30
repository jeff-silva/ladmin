<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AppSync extends AppBase
{
    protected $signature = 'app:sync';
    protected $description = 'Sincroniza arquivos entre projeto atual e projeto configurado no .env (SYNC_PATH="C:\\folder\\project")';

    public function handle()
    {
        $this->call('config:clear');
        $this->comment('');

        $sync_path = env('SYNC_PATH');
        if (! $sync_path) {
            $this->error("⚠  SYNC_PATH vazio");
            return;
        }

        $files = [
            'app/Console/Commands' => [],
            'app/Http/Controllers/Controller.php' => [],
            'app/Traits' => [],
            'app/Formats' => [],
            'database/migrations' => [],
            'serve.js' => [],
            'client/app.js' => [],
            'client/app.scss' => [],
            'client/pages/dev' => [],
            'client/pages/admin/settings.vue' => [],
            'client/pages/admin/settings/index.vue' => [],
            'client/pages/admin/settings/email.vue' => [],
            'client/components' => [],
        ];

        foreach($files as $file => $info) {
            $from = base_path($file);
            $to = rtrim($sync_path, '/') .'/'. ltrim($file, '/');

            $from_ext = pathinfo($file, PATHINFO_EXTENSION);

            if (!$from_ext) {
                foreach(\File::allFiles($from) as $from_file) {
                    $from_file = $from_file->getPath() .'/'. $from_file->getBasename();
                    $from_file = preg_replace('/\\\|\//', DIRECTORY_SEPARATOR, $from_file);
                    $from_file = ltrim(str_replace(base_path(), '', $from_file), DIRECTORY_SEPARATOR);
                    $files[ $from_file ] = [];
                }
                unset($files[ $file ]);
                continue;
            }
        }

        foreach($files as $file => $info) {
            $files[ $file ] = [
                'from' => base_path($file),
                'to' => rtrim($sync_path, '/') .'/'. ltrim($file, '/'),
            ];
        }

        foreach($files as $file => $info) {
            if (!file_exists($info['to'])) {
                $this->moveFile('⇈', $info['from'], $info['to']);
                continue;
            }

            $from_modified = \File::lastModified($info['from']);
            $from_content = file_get_contents($info['from']);
            
            $to_modified = \File::lastModified($info['to']);
            $to_content = file_get_contents($info['to']);

            if ($from_content==$to_content) { continue; }

            if ($from_modified > $to_modified) {
                $this->moveFile('⇈', $info['from'], $info['to']);
            }
            else {
                $this->moveFile('⇊', $info['to'], $info['from']);
            }
        }

        $this->comment('🎉 Finalizado');
    }

    public function moveFile($icon, $from, $to) {
        $content = file_get_contents($from);
        file_put_contents($to, $content);

        $this->comment("{$icon}  Movendo {$from}");
        $this->comment("{$icon}     Para {$to}");
        $this->comment('');
    }

}
