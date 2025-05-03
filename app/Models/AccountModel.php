<?php
    declare(strict_types=1);

    namespace App\Models;

    use App\Abstract\Set;

    use App\Interfaces\IntercafeCrud;
    use App\Interfaces\InterfaceTable;

    use App\Helpers\Validate_helper;
    use App\Helpers\Account_helper;
    use App\Helpers\Customvalues_helper;

    use App\Traits\Messages as Messages;

    class AccountModel extends Set implements IntercafeCrud, InterfaceTable
    {
        use Messages;

        public null|int $id = null;
        public null|string $account = null;
        public null|string $firstName = null;
        public null|string $secondName = null;
        public null|string $email = null;
        public null|string $password = null;
        public null|string $active = null;
        public null|string $softDeleted = null;
        public null|string $created = null;
        public null|string $updated = null;

        private string $table = 'tbl_accounts';

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
            return Account_helper::createValidate($this, $data);
        }

        protected function updateValidate(array $data): bool
        {
            return Account_helper::updateValidate($this, $data);
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
