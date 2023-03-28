<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Service;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @param Service $test
     * @return int
     */
    public function handle(Service $test)
    {
        $test->test();
        return Command::SUCCESS;
    }
}
