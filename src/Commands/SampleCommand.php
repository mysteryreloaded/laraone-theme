<?php 


namespace mysteryreloaded\laraonetheme\Commands;
use mysteryreloaded\laraonetheme\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


class SampleCommand extends GeneratorCommand
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

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        return str_replace('dummy:command', $this->option('command'), $stub);
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Console\Commands';
    }

    // /**
    //  * Get the console command arguments.
    //  *
    //  * @return array
    //  */
    // protected function getArguments()
    // {
    //     return [
    //         ['name', InputArgument::REQUIRED, 'The name of the command.'],
    //     ];
    // }

    // /**
    //  * Get the console command options.
    //  *
    //  * @return array
    //  */

    public function handle() {
        $this->info('Sample command has been run!');
    }
}
