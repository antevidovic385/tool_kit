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
        public static int $FAILED = 5;
        public static int $LINK_EXPIRED = 6;

        public static int $FIRST_NAME_IS_MANDATORY = 1000;
        public static int $SECOND_NAME_IS_MANDATORY = 1001;
        public static int $EMAIL_IS_MANDATORY = 1002;
        public static int $COUNTY_PHONE_CODE_IS_MANDATORY = 1003;
        public static int $PHONE_NUMBER_IS_MANDATORY = 1004;
        public static int $INVALID_ACTIVE_VALUE = 1005;
        public static int $INVALID_SOFT_DELETED_VALUE = 1006;
        public static int $PASSWORD_IS_MANDATORY = 1007;
        public static int $ACCOUNT_NAME_IS_MANDATORY = 1008;
        public static int $ACCOUNT_NAME_ALREADY_EXISTS = 1009;
        public static int $ACCOUNT_EMAIL_ALREADY_EXISTS = 1010;
        public static int $INVALID_EMAIL = 1011;
        public static int $INVALID_COUNTY_PHONE_CODE  = 1012;
        public static int $INVALID_PHONE_NUMBER = 1013;
        public static int $UNKNOWN_ACCOUNT_EMAIL = 1014;
        public static int $ACCOUNT_NOT_ACTIVE = 1015;
        public static int $CHECK_PASSWORD_LOGIN = 1016;
        public static int $RESET_PASSWORD_EMAIL_SENT = 1017;
        public static int $RESET_PASSWORD_LINK_USED = 1018;
        public static int $RESET_PASSWORD_LINK_EXPIRED = 1019;
        public static int $EMAIL_SUBJECT_IS_MANDATORY = 1020;
        public static int $EMAIL_MESSAGE_IS_MANDATORY = 1021;
        public static int $EMAIL_IMG_PIXEL_IS_MANDATORY = 1022;
        public static int $EMAIL_SENT_IS_MANDATORY = 1023;
        public static int $INVALID_ACCOUNT_ID = 1024;
        public static int $INVALID_EMAIL_SUBJECT = 1025;
        public static int $INVALID_EMAIL_MESSAGE = 1026;
        public static int $INVALID_EMAIL_IMG_PIXES = 1027;
        public static int $INVALID_EMAIL_SENT = 1028;
        public static int $INVALID_EMAIL_OPENNED = 1029;
        public static int $INVALID_EMAIL_OPENNEDAT = 1030;
        public static int $INVALID_EMAIL_CREATED = 1031;
        public static int $ACCOUNT_ACTIVATED = 1032;
        public static int $ACCOUNT_NOT_ACTIVATED = 1033;

        public static function getMessage(int $messageCode, string $message = ''): string
        {
            $messages = [
                self::$NO_DATA_SENT                     => 'No data sent',
                self::$NOT_ALLOWED                      => 'Not allowed',
                self::$SAVED                            => 'Saved',
                self::$NOT_SAVED                        => 'Not saved',
                self::$FAILED                           => 'Failed! Please try again',
                self::$LINK_EXPIRED                     => 'Link expired!',

                self::$FIRST_NAME_IS_MANDATORY          => 'First name is mandatory',
                self::$SECOND_NAME_IS_MANDATORY         => 'Second name is mandatory',
                self::$EMAIL_IS_MANDATORY               => 'Email is mandatory',
                self::$COUNTY_PHONE_CODE_IS_MANDATORY   => 'Country phone code is mandatory',
                self::$PHONE_NUMBER_IS_MANDATORY        => 'Mobile or phone number is mandatory',
                self::$INVALID_ACTIVE_VALUE             => 'Invalid active value',
                self::$INVALID_SOFT_DELETED_VALUE       => 'Invalid deleted value',
                self::$PASSWORD_IS_MANDATORY            => 'The password is mandatory '
                                                            .' it must contains at least one digit, minimum '
                                                            . Customvalues_helper::$MIN_PASSWORD_LENGTH .
                                                            ' characters and it can not contains empty space',
                self::$ACCOUNT_NAME_IS_MANDATORY        => 'Account name is mandatory and can contain only alphanumeric signs and space',
                self::$ACCOUNT_NAME_ALREADY_EXISTS      => 'Account with this name already exists',
                self::$ACCOUNT_EMAIL_ALREADY_EXISTS     => 'Account with this email already exists',
                self::$INVALID_COUNTY_PHONE_CODE        => 'Country phone code is not valid',
                self::$INVALID_EMAIL                    => 'Email is not valid',
                self::$INVALID_PHONE_NUMBER             => 'Phone number is not valid',
                self::$UNKNOWN_ACCOUNT_EMAIL            => 'No account with this email',
                self::$ACCOUNT_NOT_ACTIVE         => 'Account is not active. We sent you an email with activation link',
                self::$CHECK_PASSWORD_LOGIN             => 'Failed! Please check your password',
                self::$RESET_PASSWORD_EMAIL_SENT        => 'We sent you an email with a link to reset a password. '
                                                            . 'Link will expire in '
                                                            . Customvalues_helper::$RESET_PASSWORD_LINK_TIME . ' '
                                                            . 'minutes.',
                self::$RESET_PASSWORD_LINK_USED         => 'Reset password link already used. Go back to reset password page and require new link',
                self::$RESET_PASSWORD_LINK_EXPIRED      => 'Reset password link expired. Go back to reset password page and require new link',
                self::$EMAIL_SUBJECT_IS_MANDATORY       => 'Subject is mandatory',
                self::$EMAIL_MESSAGE_IS_MANDATORY       => 'Email message is mandatory',
                self::$EMAIL_IMG_PIXEL_IS_MANDATORY     => 'Image pixel is mandatory',
                self::$EMAIL_SENT_IS_MANDATORY          => 'Email sent is mandatory',
                self::$INVALID_ACCOUNT_ID               => 'Invalid account id',
                self::$INVALID_EMAIL_SUBJECT            => 'Invalid email subject',
                self::$INVALID_EMAIL_MESSAGE            => 'Invalid email message',
                self::$INVALID_EMAIL_IMG_PIXES          => 'Invalid email image pixel',
                self::$INVALID_EMAIL_SENT               => 'Invalid email sent value',
                self::$INVALID_EMAIL_OPENNED            => 'Invalid email openned value',
                self::$INVALID_EMAIL_OPENNEDAT          => 'Invalid email openned at datetime',
                self::$INVALID_EMAIL_CREATED            => 'Invalid email created datetime',
                self::$ACCOUNT_ACTIVATED                => 'Account activated',
                self::$ACCOUNT_NOT_ACTIVATED            => 'Account not activated'
            ];

            return trim($messages[$messageCode] . ' ' . $message);
        }

    }
