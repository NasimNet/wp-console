<?php

namespace WPConsole\Exceptions;

use Exception;

class WPConsoleException extends Exception {

    /**
     * Error code
     *
     * @since WP_CONSOLE_SINCE
     *
     * @var string
     */
    protected $error_code = '';

    /**
     * Class constructor
     *
     * @since WP_CONSOLE_SINCE
     *
     * @param string $error_code
     * @param string $message
     * @param int    $status_code
     */
    public function __construct( $error_code, $message, $status_code = 422 ) {
        $this->error_code = $error_code;

        parent::__construct( $message, $status_code );
    }

    /**
     * Get error code
     *
     * @since WP_CONSOLE_SINCE
     *
     * @return string
     */
    final public function get_error_code() {
        return $this->error_code;
    }

    /**
     * Get error message
     *
     * @since WP_CONSOLE_SINCE
     *
     * @return string
     */
    final public function get_message() {
        return $this->getMessage();
    }

    /**
     * Get error status code
     *
     * @since WP_CONSOLE_SINCE
     *
     * @return int
     */
    final public function get_status_code() {
        return $this->getCode();
    }
}
