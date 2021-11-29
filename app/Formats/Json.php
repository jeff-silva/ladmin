<?php

namespace App\Formats;

class Json extends Formats {

    public $extension = 'json';
    public $mime = 'application/json';

    public function export($query) {
        return json_encode($query->get());
    }

    public function import() {
        // 
    }
    
}