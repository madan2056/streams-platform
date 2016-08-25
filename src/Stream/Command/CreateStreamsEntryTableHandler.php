<?php namespace Anomaly\Streams\Platform\Stream\Command;

use Anomaly\Streams\Platform\Stream\StreamSchema;

/**
 * Class CreateStreamsEntryTableHandler
 *
 * @link    http://anomaly.is/streams-platform
 * @author  AnomalyLabs, Inc. <hello@anomaly.is>
 * @author  Ryan Thompson <ryan@anomaly.is>
 */
class CreateStreamsEntryTableHandler
{

    /**
     * The schema object.
     *
     * @var \Anomaly\Streams\Platform\Stream\StreamSchema
     */
    protected $schema;

    /**
     * Create a new CreateStreamsEntryTableHandler instance.
     *
     * @param StreamSchema $schema
     */
    public function __construct(StreamSchema $schema)
    {
        $this->schema = $schema;
    }

    /**
     * Create a new CreateStreamsEntryTableHandler instance.
     *
     * @param CreateStreamsEntryTable $command
     */
    public function handle(CreateStreamsEntryTable $command)
    {
        $stream = $command->getStream();

        $this->schema->createTable($stream);

        if ($stream->isTranslatable()) {
            $table = $stream->getEntryTranslationsTableName();

            $this->schema->createTranslationsTable($table);
        }
    }
}
