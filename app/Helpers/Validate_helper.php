<?php
    declare(strict_types=1);

    namespace App\Helpers;

    use App\Helpers\Country_helper;
    use App\Helpers\Customvalues_helper;

    Class Validate_helper
    {

        public static function validateString(mixed $string, int $minLength = 0): bool
        {
            return is_string($string) ? (strlen(trim($string)) >= $minLength) : false;
        }

        public static function validateInteger(mixed $integer): bool
        {
            if (is_bool($integer) || is_null($integer)) return false;

            return (filter_var($integer, FILTER_VALIDATE_INT) === 0 || filter_var($integer, FILTER_VALIDATE_INT));
        }

        public static function validatePositiveInteger(mixed $integer): bool
        {
            return (self::validateInteger($integer) && intval($integer) > 0);
        }

        public static function validatePositiveIntegerAndZero(mixed $integer): bool
        {
            return (self::validateInteger($integer) && intval($integer) >= 0);
        }

        public static function validateFloat(mixed $float): bool
        {
            if (is_bool($float) || is_null($float)) return false;

            return (filter_var($float, FILTER_VALIDATE_FLOAT) === 0.0 || filter_var($float, FILTER_VALIDATE_FLOAT));
        }

        public static function validatePositiveFloat(mixed $float): bool
        {
            return (self::validateFloat($float) && intval($float) > 0);
        }

        public static function validatePositiveFloatAndZero(mixed $float): bool
        {
            return (self::validateFloat($float) && intval($float) >= 0);
        }

        public static function validateNumber(mixed $number): bool
        {
            return (self::validateInteger($number) || self::validateFloat($number));
        }

        public static function validateEmail(mixed $email): bool
        {
            return (self::validateString($email) && filter_var($email, FILTER_VALIDATE_EMAIL));
        }

        public static function validatePassword(mixed $password): bool
        {
            return
                (
                    self::validateString($password)
                    && strlen($password) >= Customvalues_helper::$MIN_PASSWORD_LENGTH
                    && strpbrk($password, '0123456789')
                    && !str_contains($password, ' ')
                    #&& strtolower($password) !== $password
                );
        }

        public static function validateDate(mixed $date): bool
        {
            $date = trim($date);
            return strtotime($date) ? true : false;
        }

        public static function validatePhoneNumber(mixed $mobile): bool
        {
            return (
                self::validateString($mobile)
                && (strlen(trim($mobile)) >= Customvalues_helper::$MIN_PHONE_LENGTH)
                && is_numeric($mobile)
            );
        }

        public static function validateUrl(mixed $url): bool
        {
            return (self::validateString($url) && filter_var($url, FILTER_VALIDATE_URL));
        }

        public static function validateBoolValue(mixed $value): bool
        {
            return ($value === '0' || $value === '1');
        }

        public static function validateCountryPhoneCode(mixed $countryPhoneCode): bool
        {
            if (!self::validateString($countryPhoneCode)) return false;

            $countryCodes = Country_helper::countriesData();

            foreach ($countryCodes as $country) {
                if ($country['phoneCode'] === $countryPhoneCode) return true;
            }

            return false;
        }

        public static function validateCountryCode(mixed $countryCode): bool
        {
            if (!self::validateString($countryCode)) return false;

            $countryCodes = Country_helper::countriesData();

            foreach ($countryCodes as $country) {
                if ($country['countryIsoCode'] === $countryCode) return true;
            }

            return false;
        }

        public static function validateAlphaNumeric(mixed $string, bool $spaceAllowed): bool
        {
            if ($spaceAllowed) {
                str_replace(' ', '', $string);
            }

            return (self::validateString($string) && ctype_alnum($string) && !(str_contains($string, ' ')));
        }

        public static function validateIsNull(mixed $value): bool
        {
            return is_null($value);
        }

    }
