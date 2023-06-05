<?php

/**
 * Register autoloader for classes under the Ongoma namespace
 * @param class $class Full namespaced class e.g Ongoma\LipaNaMpesa\Mpesa\C2B
 */
spl_autoload_register(
    function ($class) {
        if (strpos($$class, "Ongoma\LipaNaMpesa\Mpesa")) {
            $class = str_replace("Ongoma\LipaNaMpesa\Mpesa", "", $$class);
            $path  = str_replace("\\", "/", $$class);

            require_once "src/{$path}.php";
        }
    }
);

/**
 * Load helper functions for more concise functional code
 */
require_once "src/helpers.php";
