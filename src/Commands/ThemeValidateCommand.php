<?php

namespace mysteryreloaded\laraonetheme\Commands;

use Illuminate\Console\Scheduling\Schedule;
use mysteryreloaded\laraonetheme\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use JsonSchema\Validator as JsonValidator;

class ThemeValidateCommand extends GeneratorCommand
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'theme:validate';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Simply validate theme json.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Sample command';

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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $theme = base_path() . DIRECTORY_SEPARATOR . 'theme';
        $themeData = json_decode(file_get_contents($theme . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'theme.json'));
        $validator = new JsonValidator;
        $validator->validate($themeData, (object)['$ref' => 'file://' . realpath('schemas' . DIRECTORY_SEPARATOR . 'theme.json')]);

        if ($validator->isValid()) {
            $this->info('Theme json file validates against the schema.');
        } else {
            $this->error('Theme json file does not validate. There are violations!');
            foreach ($validator->getErrors() as $error) {
                $this->error( $error['property'] .': ' . $error['message']);
            }
        }
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
