<?php

namespace WPConsole\Core\Console\VarDumper\Dumper;

use Symfony\Component\VarDumper\Dumper\HtmlDumper;

/**
 * Capture all dumps into global $wp_console_dump
 */
class WPConsoleDumper extends HtmlDumper {

    /**
     * Echo output line
     *
     * @since WP_CONSOLE_SINCE
     *
     * @param string $line
     * @param int    $depth
     * @param int    $indentPad
     *
     * @return void
     */
    protected function echoLine( $line, $depth, $indentPad ) {
        global $wp_console_dump;

        if ( -1 !== $depth ) {
            $wp_console_dump .= str_repeat( $indentPad, $depth ) . $line . "\n";
        }
    }
}