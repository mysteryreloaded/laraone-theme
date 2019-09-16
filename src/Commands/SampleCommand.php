<?php 


namespace mysteryreloaded\laraonetheme\Commands;
use Illuminate\Console\Command;

class SampleCommand extends Command {
    protected $signature = 'sample-command';

    protected $description = 'A sample command';

    public function handle() {
        $this->info('Sample command has been run!');
    }
}