<?php
    declare(strict_types=1);

    namespace App\Helpers;

    use App\Models\AccountModel;

    use App\Helpers\Validate_helper;
    use App\Helpers\Message_helper;

    class Account_helper
    {

        public static function createValidate(AccountModel $account, array &$data): bool
        {
            $errors = 0;

            if (empty($data)) {
                $account->pushErrorMessageId(Message_helper::$NO_DATA_SENT);
                $errors++;
            }

            if (empty($data['account'])) {
                $account->pushErrorMessageId(Message_helper::$ACCOUNT_NAME_IS_MANDATORY);
                $errors++;
            }

            if (empty($data['firstName'])) {
                $account->pushErrorMessageId(Message_helper::$FIRST_NAME_IS_MANDATORY);
                $errors++;
            }

            if (empty($data['secondName'])) {
                $account->pushErrorMessageId(Message_helper::$SECOND_NAME_IS_MANDATORY);
                $errors++;
            }

            if (empty($data['email'])) {
                $account->pushErrorMessageId(Message_helper::$EMAIL_IS_MANDATORY);
                $errors++;
            }

            // if (empty($data['countryPhoneCode'])) {
            //     $account->pushErrorMessageId(Message_helper::$COUNTY_PHONE_CODE_IS_MANDATORY);
            //     $errors++;
            // }

            // if (empty($data['phoneNumber'])) {
            //     $account->pushErrorMessageId(Message_helper::$PHONE_NUMBER_IS_MANDATORY);
            //     $errors++;
            // }

            if (empty($data['password'])) {
                $account->pushErrorMessageId(Message_helper::$PASSWORD_IS_MANDATORY);
                $errors++;
            }

            return (($errors === 0) && self::updateValidate($account, $data));
        }

        public static function updateValidate(AccountModel $account, array &$data): bool
        {
            $errors = 0;

            if (empty($data)) {
                $account->pushErrorMessageId(Message_helper::$NO_DATA_SENT);
                $errors++;
            }

            if (isset($data['account'])) {
                if (!Validate_helper::validateAlphaNumeric($data['account'], true)) {
                    $account->pushErrorMessageId(Message_helper::$ACCOUNT_NAME_IS_MANDATORY);
                    $errors++;
                } else {
                    if ($account->isUniquePropertyExists('account', $data['account'])) {
                        $account->pushErrorMessageId(Message_helper::$ACCOUNT_NAME_ALREADY_EXISTS);
                        $errors++;
                    }
                }
            }

            if (isset($data['firstName']) && !Validate_helper::validateString($data['firstName'], 1)) {
                $account->pushErrorMessageId(Message_helper::$FIRST_NAME_IS_MANDATORY);
                $errors++;
            }

            if (isset($data['secondName'])  && !Validate_helper::validateString($data['secondName'], 1)) {
                $account->pushErrorMessageId(Message_helper::$SECOND_NAME_IS_MANDATORY);
                $errors++;
            }

            if (isset($data['email'])) {
                if (!Validate_helper::validateEmail($data['email'])) {
                    $account->pushErrorMessageId(Message_helper::$INVALID_EMAIL);
                    $errors++;
                } else {
                    if ($account->isUniquePropertyExists('email', $data['email'])) {
                        $account->pushErrorMessageId(Message_helper::$ACCOUNT_EMAIL_ALREADY_EXISTS);
                        $errors++;
                    }
                }
            }

            if (isset($data['countryPhoneCode']) && !Validate_helper::validateCountryPhoneCode($data['countryPhoneCode'])) {
                $account->pushErrorMessageId(Message_helper::$INVALID_COUNTY_PHONE_CODE);
                $errors++;
            }

            if (isset($data['phoneNumber']) && !Validate_helper::validatePhoneNumber($data['phoneNumber'])) {
                $account->pushErrorMessageId(Message_helper::$INVALID_PHONE_NUMBER);
                $errors++;
            }

            if (isset($data['password']) && !Validate_helper::validatePassword($data['password'])) {
                $account->pushErrorMessageId(Message_helper::$PASSWORD_IS_MANDATORY);
                $errors++;
            }

            if (isset($data['active']) && !Validate_helper::validateBoolValue($data['active'])) {
                $account->pushErrorMessageId(Message_helper::$INVALID_ACTIVE_VALUE);
                $errors++;
            }

            if (isset($data['softDeleted']) && !Validate_helper::validateBoolValue($data['softDeleted'])) {
                $account->pushErrorMessageId(Message_helper::$INVALID_SOFT_DELETED_VALUE);
                $errors++;
            }

            return ($errors === 0);
        }

        public static function getAccount(AccountModel $account): array
        {
            $table = $account->getThisTable();
            $filter = [
                'what' => [
                    $table . '.id',
                    $table . '.account',
                    $table . '.firstName',
                    $table . '.secondName',
                    $table . '.email',
                    $table . '.active'
                ],
                'where' => [
                    $table . '.id' => $account->id,
                    $table . '.softDeleted' => '0'
                ]
            ];
            $data = $account->fetch($filter);

            return $data ? self::mapData($data[0]) : [];
        }

        private static function mapData(array $data): array
        {
            $data['id'] = intval($data['id']);

            return $data;
        }

        public static function getAccountDataWithEmail(AccountModel $account): array
        {
            $table = $account->getThisTable();
            $filter = [
                'what' => [
                    $table . '.id',
                    $table . '.account',
                    $table . '.firstName',
                    $table . '.secondName',
                    $table . '.email',
                    $table . '.active',
                    $table . '.softDeleted',
                    $table . '.password'
                ],
                'where' => [
                    $table . '.email' => $account->email
                ]
            ];

            $data = $account->fetch($filter);

            return $data ? self::mapData($data[0]) : [];
        }

    }
