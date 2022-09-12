<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Mapper\DataSource\Post\_generated;

use Atlas\Mapper\RecordSet;
use Atlas\Mapper\DataSource\Post\PostRecord;
use Atlas\Mapper\DataSource\Post\PostRecordSet;

/**
 * @method __construct(PostRecord[], callable $newRecordFactory)
 * @method PostRecord offsetGet($offset)
 * @method PostRecord appendNew(array $fields = [])
 * @method ?PostRecord getOneBy(array $whereEquals)
 * @method PostRecordSet getAllBy(array $whereEquals)
 * @method ?PostRecord detachOneBy(array $whereEquals)
 * @method PostRecordSet detachAllBy(array $whereEquals)
 * @method PostRecordSet detachAll()
 * @method PostRecordSet detachDeleted()
 */
abstract class PostRecordSet_ extends RecordSet
{
}