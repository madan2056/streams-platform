<?php namespace Anomaly\Streams\Platform\Application\Command;

/**
 * Class ReadEnvironmentFile
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class ReloadEnvironmentFile
{

    /**
     * Handle the command.
     *
     * @return array
     */
    public function handle()
    {
        foreach (file(base_path('.env'), FILE_IGNORE_NEW_LINES) as $line) {

            // Check for # comments.
            if (!starts_with($line, '#')) {
                putenv($line);
            }
        }
    }
}
