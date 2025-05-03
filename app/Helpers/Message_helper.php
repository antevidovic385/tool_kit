<?php
    declare(strict_types=1);

    namespace App\Helpers;

    use App\Helpers\Customvalues_helper;

    class Message_helper
    {

        public static int $NO_DATA_SENT = 1;
        public static int $NOT_ALLOWED = 2;
        public static int $SAVED = 3;
        public static int $NOT_SAVED = 4;

        public static int $FIRST_NAME_IS_MANDATORY = 1000;
        public static int $SECOND_NAME_IS_MANDATORY = 1001;
        public static int $EMAIL_IS_MANDATORY = 1002;
        public static int $COUNTY_PHONE_CODE_IS_MANDATORY = 1003;
        public static int $PHONE_NUMBER_IS_MANDATORY = 1004;
        public static int $INVALID_ACTIVE_VALUE = 1005;
        public static int $INVALID_SOFT_DELETED_VALUE = 1006;
        public static int $PASSWORD_IS_MANDATORY = 1007;
        public static int $ACCOUNT_NAME_IS_MANDATORY = 1008;
        public static int $EMAIL_ALREADY_EXISTS = 1009;
        public static int $ACCOUNT_NAME_ALREADY_EXISTS = 1010;
        public static int $ACCOUNT_EMAIL_ALREADY_EXISTS = 1011;
        public static int $INVALID_EMAIL = 1012;
        public static int $INVALID_COUNTY_PHONE_CODE  = 1013;
        public static int $INVALID_PHONE_NUMBER = 1014;
        public static int $UNKNOWN_ACCOUNT_EMAIL = 1015;
        public static int $ACCOUNT_NOT_ACTIVE_LOGIN = 1016;
        public static int $CHECK_PASSWORD_LOGIN = 1017;

        private static null|int $MESSAGE_CODE = null;
        private static null|string $MESSAGE = null;

        private static function setMessgaeCode(int $messageCode): void
        {
            self::$MESSAGE_CODE = $messageCode;

            return;
        }

        private static function setMessage(string $message): void
        {
            if (self::$MESSAGE_CODE === self::$NO_DATA_SENT) {
                self::$MESSAGE = 'No data sent';
            } elseif (self::$MESSAGE_CODE === self::$NOT_ALLOWED) {
                self::$MESSAGE = 'Not allowed';
            } elseif (self::$MESSAGE_CODE === self::$SAVED) {
                self::$MESSAGE = 'Saved';
            } elseif (self::$MESSAGE_CODE === self::$NOT_SAVED) {
                self::$MESSAGE = 'Not saved';
            } elseif (self::$MESSAGE_CODE === self::$FIRST_NAME_IS_MANDATORY) {
                self::$MESSAGE = 'First name is mandatory';
            } elseif (self::$MESSAGE_CODE === self::$SECOND_NAME_IS_MANDATORY) {
                self::$MESSAGE = 'Second name is mandatory';
            } elseif (self::$MESSAGE_CODE === self::$EMAIL_IS_MANDATORY) {
                self::$MESSAGE = 'Email is mandatory';
            } elseif (self::$MESSAGE_CODE === self::$COUNTY_PHONE_CODE_IS_MANDATORY) {
                self::$MESSAGE = 'Country phone code is mandatory';
            } elseif (self::$MESSAGE_CODE === self::$PHONE_NUMBER_IS_MANDATORY) {
                self::$MESSAGE = 'Mobile or phone number is mandatory';
            } elseif (self::$MESSAGE_CODE === self::$INVALID_ACTIVE_VALUE) {
                self::$MESSAGE = 'Invalid active value';
            } elseif (self::$MESSAGE_CODE === self::$INVALID_SOFT_DELETED_VALUE) {
                self::$MESSAGE = 'Invalid deleted value';
            } elseif (self::$MESSAGE_CODE === self::$PASSWORD_IS_MANDATORY) {
                self::$MESSAGE  = 'The password is mandatory. It must contains at least one digit, minimum ';
                self::$MESSAGE .= Customvalues_helper::$MIN_PASSWORD_LENGTH;
                self::$MESSAGE .= ' characters and it can not contains empty space';
            } elseif (self::$MESSAGE_CODE === self::$ACCOUNT_NAME_IS_MANDATORY) {
                self::$MESSAGE = 'Account name is mandatory and can contain only alphanumeric signs and space';
            } elseif (self::$MESSAGE_CODE === self::$EMAIL_ALREADY_EXISTS) {
                self::$MESSAGE = 'User with this email already exists';
            } elseif (self::$MESSAGE_CODE === self::$ACCOUNT_NAME_ALREADY_EXISTS) {
                self::$MESSAGE = 'Account with this name already exists';
            } elseif (self::$MESSAGE_CODE === self::$ACCOUNT_EMAIL_ALREADY_EXISTS) {
                self::$MESSAGE = 'Account with this email already exists';
            } elseif (self::$MESSAGE_CODE === self::$INVALID_COUNTY_PHONE_CODE) {
                self::$MESSAGE = 'Country phone code is not valid';
            } elseif (self::$MESSAGE_CODE === self::$INVALID_EMAIL) {
                self::$MESSAGE = 'Email is not valid';
            } elseif (self::$MESSAGE_CODE === self::$INVALID_PHONE_NUMBER) {
                self::$MESSAGE = 'Phone number is not valid';
            } elseif (self::$MESSAGE_CODE === self::$UNKNOWN_ACCOUNT_EMAIL) {
                self::$MESSAGE = 'No account with this email';
            } elseif (self::$MESSAGE_CODE === self::$ACCOUNT_NOT_ACTIVE_LOGIN) {
                self::$MESSAGE = 'Account is not active. We send you an email to activate you account';
            } elseif (self::$MESSAGE_CODE === self::$CHECK_PASSWORD_LOGIN) {
                self::$MESSAGE = 'Failed! Please check your password';
            }

    
            if (!empty($message)) {
                self::$MESSAGE .= ' ' . $message;
            }

            return;
        }

        public static function getMessage(int $messageCode, string $message = ''): string
        {
            self::setMessgaeCode($messageCode);
            self::setMessage($message);

            return self::$MESSAGE;
        }

    }
