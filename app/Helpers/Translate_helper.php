<?php
    declare(strict_types=1);

    namespace App\Helpers;

    class Translate_helper
    {

        public static function translate(string $text): string
        {
            // language will be set in session of every page visitor
            return $text;
        }

    }
