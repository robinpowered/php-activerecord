<?php

use ActiveRecord\Logger;

final class TestLogger implements Logger
{

    private $delegate;

    public function __construct(Log_file $delegate)
    {
        $this->delegate = $delegate;
    }

    public function log($message, array $params = null)
    {
        $this->delegate->log(
            sprintf('%s (with values: %s)', $message, var_export($params, true))
        );
    }

    public function done()
    {
        // No-op
    }
}
