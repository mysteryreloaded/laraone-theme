<?php 

namespace mysteryreloaded\laraonetheme;

use Illuminate\Console\Command;

class MoveFiles extends Command {
    protected $signature = 'move-files';

    public function handle() {
        $this->info(FilePacker::move());
    }
}