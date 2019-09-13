<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use JsonSchema\Validator as JsonValidator;

class ThemeValidateCommand extends Command
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
