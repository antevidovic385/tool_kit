<?php
    declare(strict_types=1);

    namespace App\Helpers;

    use App\Models\EmailLogModel;

    use App\Helpers\Validate_helper;
    use App\Helpers\Message_helper;

    class EmailLog_helper
    {

        public static function createValidate(EmailLogModel $emailLog, array &$data): bool
        {
            $errors = 0;

            if (empty($data)) {
                $emailLog->pushErrorMessageId(Message_helper::$NO_DATA_SENT);
                $errors++;
            }

            if (empty($data['email'])) {
                $emailLog->pushErrorMessageId(Message_helper::$EMAIL_IS_MANDATORY);
                $errors++;
            }

            if (empty($data['subject'])) {
                $emailLog->pushErrorMessageId(Message_helper::$EMAIL_SUBJECT_IS_MANDATORY);
                $errors++;
            }

            if (empty($data['message'])) {
                $emailLog->pushErrorMessageId(Message_helper::$EMAIL_MESSAGE_IS_MANDATORY);
                $errors++;
            }

            if (empty($data['imgPixel'])) {
                $emailLog->pushErrorMessageId(Message_helper::$EMAIL_IMG_PIXEL_IS_MANDATORY);
                $errors++;
            }
            
            if (!isset($data['sent'])) {
                $emailLog->pushErrorMessageId(Message_helper::$EMAIL_SENT_IS_MANDATORY);
                $errors++;
            }


            return (($errors === 0) && self::updateValidate($emailLog, $data));
        }

        public static function updateValidate(EmailLogModel $emailLog, array &$data): bool
        {
            $errors = 0;

            if (isset($data['accountId']) && !Validate_helper::validatePositiveInteger($data['accountId'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_ACCOUNT_ID);
                $errors++;
            }

            if (isset($data['email']) && !Validate_helper::validateEmail($data['email'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL);
                $errors++;
            }

            if (isset($data['subject']) && !Validate_helper::validateString($data['subject'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL_SUBJECT);
                $errors++;
            }

            if (isset($data['message']) && !Validate_helper::validateString($data['message'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL_MESSAGE);
                $errors++;
            }

            if (isset($data['imgPixel']) && !Validate_helper::validateString($data['imgPixel'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL_IMG_PIXES);
                $errors++;
            }

            if (isset($data['sent']) && !Validate_helper::validateBoolValue($data['sent'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL_SENT);
                $errors++;
            }

            if (isset($data['openned']) && !Validate_helper::validateBoolValue($data['openned'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL_OPENNED);
                $errors++;
            }

            if (isset($data['opennedAt']) && !Validate_helper::validateDate($data['opennedAt'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL_OPENNEDAT);
                $errors++;
            }

            if (isset($data['created']) && !Validate_helper::validateDate($data['created'])) {
                $emailLog->pushErrorMessageId(Message_helper::$INVALID_EMAIL_CREATED);
                $errors++;
            }

            return ($errors === 0);
        }

    }
