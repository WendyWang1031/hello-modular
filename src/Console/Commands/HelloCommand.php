<?php

namespace HelloModular\Console\Commands;

use Illuminate\Console\Command;

class HelloCommand extends Command
{
    protected $signature = 'hellomodular:hello';
    protected $description = 'Say hello from HelloModular';

    public function handle()
    {
        $this->info('👋 Hello from HelloModular command!');
    }
}
