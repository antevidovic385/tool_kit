<?php
    declare(strict_types=1);

    namespace App\Helpers;

    use App\Models\AccountModel;
    use App\Helpers\Jwt_helper;
    use App\Helpers\Customvalues_helper;

    class Email_helper
    {

        private static function sendEmail(string $email, string $subject, string $message): bool
        {
            // LOG SENT EMAIL
            return true;
        }

        public static function sendActivationLink(AccountModel $account): bool
        {
            $resetLink = base_url() . 'activate_account/'. Jwt_helper::encode(['id' => $account->id]);

            // echo $resetLink;

            return true;
        }

        public static function sendResetPasswordLink(array $account): bool
        {
            $data = [
                'account' => $account,
                'expire' => date('Y-m-d H:i:s', strtotime(('+' . Customvalues_helper::$RESET_PASSWORD_LINK_TIME . 'minutes')))
            ];

            $resetLink  = base_url() . 'save_new_password/' . Jwt_helper::encode($data);

            // echo $resetLink;

            return true;
        }

    }
