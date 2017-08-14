<?php
/**
 * @package ActiveRecord
 */
namespace ActiveRecord;

/**
 * Defines a logger for logging queries.
 *
 * @package ActiveRecord
 */
interface Logger
{

	/**
	 * Logs a message.
	 *
	 * Implementations should expect that `done()` will be called after a call
	 * to this method, for logged SQL queries.
	 *
	 * @param string $message The message to log.
	 * @param array $params Any parameters associated with the message.
	 * @return void
	 */
	public function log($message, array $params = null);

	/**
	 * Signals that a previous log context (started via `log()`) is finished.
	 *
	 * This is useful for logging the elapsed time of a SQL query.
	 *
	 * @return void
	 */
	public function done();
}
