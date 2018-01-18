<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

/**
 * Class CreateLayoutsTable
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class CreateLayoutsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* @var Builder $schema */
        $schema = app('db')->connection()->getSchemaBuilder();

        if (!$schema->hasTable('streams_layouts')) {
            $schema->create(
                'streams_layouts',
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->integer('stream_id');
                    $table->string('slug', 150);
                    $table->text('sections', 150);

                    $table->unique(['stream_id', 'slug'], 'unique_layouts');
                }
            );
        }

        if (!$schema->hasTable('streams_layouts')) {
            $schema->create(
                'streams_layouts',
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->integer('layout_id');
                    $table->string('locale')->index();
                    $table->string('name')->nullable();
                    $table->text('description')->nullable();
                }
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* @var Builder $schema */
        $schema = app('db')->connection()->getSchemaBuilder();

        $schema->dropIfExists('addons_extensions');
    }
}
