<?php
    declare(strict_types=1);

    namespace App\Helpers;

    use App\Models\AccountModel;
    use App\Models\EmailLogModel;

    use App\Helpers\Jwt_helper;
    use App\Helpers\Customvalues_helper;
    use App\Helpers\Utility_helper;

    class Email_helper
    {

        private static function sendEmail(string $email, string $subject, string $message): bool
        {
            // TO DO TRANSLATE SUBJECT
            // TO DO IMG PIXEL IN MSG
            $imgPixel = self::getImgPixel(($email . $subject));
            $sent = true;

            self::logEmail($email, $subject, $message, $imgPixel, $sent);

            return $sent;
        }

        private static function getImgPixel(string $salt): string
        {
            $imgPixel = Utility_helper::getUniqueString() . md5($salt);

            return $imgPixel;
        }

        private static function logEmail(string $email, string $subject, string $message, string $imgPixel, bool $sent): void
        {
            $emailLog = new EmailLogModel();
            $data = [
                'email'     => $email,
                'accountId' => $_SESSION['accountId'] ?? null,
                'subject'   => $subject,
                'message'   => htmlentities($message),
                'imgPixel'  => $imgPixel,
                'sent'      => ($sent ? '1' : '0'),
                'created'   => date('Y-m-d H:i:s')
            ];

            $emailLog->save($data);

            return;
        }

        public static function sendActivationLink(AccountModel $account): bool
        {
            $email = $account->email;
            $subject = 'Activate account';
            $activateAccountLink = base_url() . 'activate_account/'. Jwt_helper::encode(['id' => $account->id]);

            return self::sendEmail($email, $subject, $activateAccountLink);
        }

        public static function sendResetPasswordLink(array $account): bool
        {
            $email = $account['email'];
            $subject = 'Reset password';
            $data = [
                'account' => $account,
                'expire' => date('Y-m-d H:i:s', strtotime(('+' . Customvalues_helper::$RESET_PASSWORD_LINK_TIME . 'minutes')))
            ];
            $resetPasswordLink  = base_url() . 'save_new_password/' . Jwt_helper::encode($data);

            return self::sendEmail($email, $subject, $resetPasswordLink);
        }

    }
