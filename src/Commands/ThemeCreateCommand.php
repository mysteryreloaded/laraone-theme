<?php

namespace mysteryreloaded\laraonetheme\Commands;

use Illuminate\Console\Scheduling\Schedule;
use mysteryreloaded\laraonetheme\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
// use LaravelZero\Framework\Commands\Command;
use Validator;

class ThemeCreateCommand extends GeneratorCommand
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'theme:create';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        // $name = $this->ask('Theme name');
        $name = $this->validateAnswer(function() {
            return $this->ask('Enter theme namespace, in reverse DNS notation format e.g. (com.your-organization.themeName)');
        }, ['required', 'regex:/^[A-Za-z]{2,6}((?!-)\.[A-Za-z0-9-]{1,63}(?<!-))+$/'], 'Please try again using correct format!');

        // $namespace = $this->ask('Enter theme namespace, in reverse DNS notation format e.g. (com.your-organization.themeName)');
        // if(!preg_match("/^[A-Za-z]{2,6}((?!-)\.[A-Za-z0-9-]{1,63}(?<!-))+$/", $namespace)) {
        //     $this->error('Namespace is not valid');
        // }
        // $screens = $this->choice('How many screenshots', ['One', 'Two', 'Three', 'Four', 'Five'], 2);
        // $this->info('Theme ' . $name . ' created with ' . $screens . ' screenshots!');
    }

    private function validateAnswer($method, $rules, $message = null)
    {
        $value = $method();
        $validate = $this->validateInput($rules, $value);

        if ($validate !== true) {
            if($message) {
                $this->warn($message);
            } else {
                $this->warn($validate);
            }
            $value = $this->validateAnswer($method, $rules);
        }
        return $value;
    }

    private function validateInput($rules, $value)
    {
        $validator = Validator::make([$rules[0] => $value], [ $rules[0] => $rules[1] ]);

        if ($validator->fails()) {
            $error = $validator->errors();
            return $error->first($rules[0]);
        }else{
            return true;
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
