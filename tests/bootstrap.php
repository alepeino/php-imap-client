<?php

require __DIR__.'/../vendor/autoload.php';

if (! function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function dd()
    {
        array_map(function ($x) {
            (new Symfony\Component\VarDumper\VarDumper)->dump($x);
        }, func_get_args());

        die(1);
    }
}
