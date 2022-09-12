<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Mapper\DataSource\Thread\_generated;

use Atlas\Mapper\Record;

/**
 * @property mixed $thread_id INTEGER
 * @property mixed $author_id INTEGER NOT NULL
 * @property mixed $subject VARCHAR(255) NOT NULL
 * @property mixed $body TEXT NOT NULL
 * @property ?\Atlas\Mapper\DataSource\Author\AuthorRecord $author
 * @property ?\Atlas\Mapper\DataSource\Summary\SummaryRecord $summary
 * @property \Atlas\Mapper\DataSource\Reply\ReplyRecordSet $replies
 * @property \Atlas\Mapper\DataSource\Tagging\TaggingRecordSet $taggings
 * @property \Atlas\Mapper\DataSource\Tag\TagRecordSet $tags
 * @method \Atlas\Mapper\DataSource\Thread\ThreadRow getRow()
 */
abstract class ThreadRecord_ extends Record
{
}