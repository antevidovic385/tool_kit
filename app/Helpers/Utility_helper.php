<?php
    declare(strict_types=1);

    namespace App\Helpers;

use Faker\Core\Uuid;

    class Utility_helper
    {
        public static function createHashedPassword(string $password): string
        {
            return password_hash($password, PASSWORD_DEFAULT);
        }

        public static function sanitizeData(array $data): array
        {
            foreach ($data as $key => $value) {
                if (is_array($value)) {
                    $data[$key] = self::sanitizeData($data[$key]);
                } else {
                    $data[$key] = htmlspecialchars(trim($value));
                    if (empty($data[$key])) {
                        unset($data[$key]);
                    }
                }
            }

            return $data;
        }

        public static function validatePassword(string $password, string $hashedpassword): bool
        {
            return password_verify($password, $hashedpassword);
        }

        public static function getUniqueString(): string
        {
            $string = 'QWERTZUIOPLKJHGFDSAYXCVBNMqwertzuioplkjhgfdsamnbvcxy1234567890';
            return
                str_replace('.', '', uniqid(strval(time()), true))
                . strval(rand(1000000, 10000000))
                . str_shuffle($string);
        }

    }
