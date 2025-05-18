<?php
    declare(strict_types=1);

    namespace App\Models;

    use App\Abstract\Set;

    use App\Interfaces\IntercafeCrud;
    use App\Interfaces\InterfaceTable;

    use App\Helpers\Validate_helper;
    use App\Helpers\EmailLog_helper;
    use App\Helpers\Customvalues_helper;

    use App\Traits\Messages as Messages;

    class EmailLogModel extends Set implements IntercafeCrud, InterfaceTable
    {
        use Messages;

        public null|int     $id = null;
        public null|int     $accountId = null;
        public null|string  $email = null;
        public null|string  $subject = null;
        public null|string  $message = null;
        public null|string  $imgPixel = null;        
        public null|string  $sent = null;
        public null|string  $openned = null;
        public null|string  $opennedAt = null;
        public null|string  $created = null;

        private string $table = 'tbl_emails_logs';

        public function __construct(null|int $id = null)
        {
            parent::__construct();

            $this->setObjectId($id);
        }

        public function getThisTable(): string
        {
            return $this->table;
        }

        protected function formatPropertyValue(string $property, mixed $value): mixed
        {
            if (Validate_helper::validatePositiveInteger($value)) {
                if ($property === Customvalues_helper::$ID_PROPERTY) {
                    $value = intval($value);
                }
            }

            return $value;
        }

        protected function createValidate(array $data): bool
        {
            return EmailLog_helper::createValidate($this, $data);
        }

        protected function updateValidate(array $data): bool
        {
            return EmailLog_helper::updateValidate($this, $data);
        }

        public function save(array $data): bool
        {
            return $this->saveThis($data);
        }

        public function set(): AccountModel
        {
            return $this->setObject();
        }

        public function fetch(array $filter): null|array
        {
            return $this->select($filter);
        }

    }
