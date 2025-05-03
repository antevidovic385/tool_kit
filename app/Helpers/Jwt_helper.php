<?php
    declare(strict_types=1);

    namespace App\Helpers;

    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    class Jwt_helper
    {

        private static string $ALG = 'HS256';

        public static function encode(array $payloadArray): string
        {
            $payloadArray['uniqid'] = uniqid();

            $jwt = JWT::encode($payloadArray, JWT_SECRET_KEY, self::$ALG);

            return $jwt;
        }

        public static function encodeNewValue(string $key, mixed $value, string $jwt): string
        {   
            $payloadArray = self::decode($jwt);
            $payloadArray[$key] = $value;

            return self::encode($payloadArray);
        }

        public static function decode(string $jwt): ?array
        {
            $decoded = JWT::decode($jwt, new Key(JWT_SECRET_KEY, self::$ALG));

            return empty($decoded) ? null : json_decode(json_encode($decoded), true);
        }

    }
