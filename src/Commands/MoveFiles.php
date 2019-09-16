<?php 

namespace mysteryreloaded\laraonetheme;

use Illuminate\Console\Command;

class MoveFiles extends Command {
    protected $signature = 'move-files';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $this->info(FilePacker::move());
    }
}