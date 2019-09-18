<?php

namespace mysteryreloaded\laraonetheme\Commands;

use Illuminate\Console\Command;

class SampleCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'sample-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A sample command';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Sample command';

    public function handle()
    {
        $this->info('Eureka! Sample command has been run!');
    }
}
