<?php

namespace BigHairEnergy\Https\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'https:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the HTTPS redirect resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment('Publishing HTTPS Service Provider...');
        $this->callSilent('vendor:publish', ['--tag' => 'https-provider']);

        $this->comment('Publishing HTTPS Configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'https-config']);

        $this->info('HTTPS scaffolding installed successfully.');
    }
}
