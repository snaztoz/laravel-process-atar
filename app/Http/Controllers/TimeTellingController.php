<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Process;

class TimeTellingController extends Controller
{
    function timeNow()
    {
        $result = Process::path(base_path())
            ->env([
                // Keknya Windows ga inherit environment variable,
                // makanya ga bisa nemu program Python
                'SYSTEMROOT' => getenv('SYSTEMROOT'),
                'PATH' => getenv("PATH"),
            ])
            ->run('python bin/time.py');

        return view('time', ['now' => $result->output()]);
    }
}
