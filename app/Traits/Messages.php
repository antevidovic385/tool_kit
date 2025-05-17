<?php
    declare(strict_types=1);

    namespace App\Traits;

    use App\Helpers\Message_helper;
    use App\Helpers\Translate_helper;

    trait Messages
    {
        public array $messages = [];

        private string $infoTypeMessage      = 'info';
        private string $successTypeMessage   = 'success';
        private string $warningTypeMessage   = 'warning';
        private string $errorTypeMessages    = 'danger';

        private function pushMessageCodeInMessages(string $type, int $messageCode, string $message = ''): void
        {
            $message = Message_helper::getMessage($messageCode, $message);

            array_push(
                $this->messages,
                [
                    'type' => $type,
                    'message' => Translate_helper::translate($message)
                ]
            );

            return;
        }

        public function pushInfoMessageId(int $messageCode, string $message = ''): void
        {
            $this->pushMessageCodeInMessages($this->infoTypeMessage, $messageCode, $message);
            return;
        }

        public function pushSuccessMessageId(int $messageCode, string $message = ''): void
        {
            $this->pushMessageCodeInMessages($this->successTypeMessage, $messageCode, $message);
            return;
        }

        public function pushWarningMessageId(int $messageCode, string $message = ''): void
        {
            $this->pushMessageCodeInMessages($this->warningTypeMessage, $messageCode, $message);
            return;
        }

        public function pushErrorMessageId(int $messageCode, string $message = ''): void
        {
            $this->pushMessageCodeInMessages($this->errorTypeMessages, $messageCode, $message);
            return;
        }

        public function getMessages(array $models = []): array
        {
            if (!empty($models)) {
                foreach ($models as $model) {
                    if (!empty($model->messages)) {
                        array_unshift($this->messages, ...$model->messages);
                    }
                }
            }

            return $this->messages;
        }

    }
