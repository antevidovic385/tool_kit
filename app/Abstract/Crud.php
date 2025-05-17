<?php
    declare(strict_types=1);

    namespace App\Abstract;

    use App\Helpers\Utility_helper;
    use App\Helpers\Customvalues_helper;

    abstract class Crud
    {

        abstract public function getThisTable(): string;

        abstract protected function formatPropertyValue(string $property, mixed $value): mixed;
        abstract protected function createValidate(array $data): bool;
        abstract protected function updateValidate(array $data): bool;
        abstract protected function getPublicProperties(): array;
        abstract protected function setObjectId(mixed $id): object;

        private null|string $table = null;

        protected null|object $db;

        public function __construct()
        {
            $this->table = $this->getThisTable();

            $this->db = \Config\Database::connect();
        }

        protected function saveThis(array $data): bool
        {
            $idNotSet = empty($this->{Customvalues_helper::$ID_PROPERTY});

            if (
                ($idNotSet && $this->createValidate($data))
                || (!$idNotSet && $this->updateValidate($data))
            ) {
                $save = $this->getDataToSave($data);

                return $idNotSet ? $this->create($save) : $this->update($save);
            }

            return false;
        }

        private function getDataToSave(array $data): array
        {
            $save = [];
            $publicProperties = $this->getPublicProperties();

            foreach ($data as $property => $value) {
                if ((in_array($property, $publicProperties) && $property !== Customvalues_helper::$ID_PROPERTY)) {

                    $save[$property] = $this->formatPropertyValue($property, $value);

                    if (is_string($save[$property])) {
                        $save[$property] = trim($save[$property]);
                    }

                    if ($property === Customvalues_helper::$PASSWORD_PROPERTY) {
                        $save[$property] = Utility_helper::createHashedPassword($save[$property]);
                    }
                }
            }

            return $save;
        }

        private function create(array $data): bool
        {
            if ($this->db->table($this->table)->insert($data)) {
                $this->setObjectId($this->db->insertID());
            }

            return !empty($this->{Customvalues_helper::$ID_PROPERTY});
        }

        private function update(array $data): bool
        {
            $where = $this->getUpdateWhere();

            return $this->updateCustom($data, $where);
        }

        private function getUpdateWhere(): array
        {
            $where = [
                $this->table . '.' . Customvalues_helper::$ID_PROPERTY => $this->{Customvalues_helper::$ID_PROPERTY}
            ];

            if (!empty($this->{Customvalues_helper::$ACCOUNT_ID_PROPERTY})) {
                $where[$this->table . '.' . Customvalues_helper::$ACCOUNT_ID_PROPERTY] = $this->{Customvalues_helper::$ACCOUNT_ID_PROPERTY};
            }

            return $where;
        }

        protected function updateCustom(array $data, array $where): bool
        {
            if (empty($where)) return false;

            $this->db->table($this->table)->update($data, $where);

            return ($this->db->affectedRows() >= 0);
        }

        protected function delete(array $where = []): bool
        {
            $where = [
                $this->table . '.' . Customvalues_helper::$ID_PROPERTY => $this->{Customvalues_helper::$ID_PROPERTY}
            ];

            if ($this->{Customvalues_helper::$ACCOUNT_ID_PROPERTY}) {
                $where[$this->table . '.' . Customvalues_helper::$ACCOUNT_ID_PROPERTY] = $this->{Customvalues_helper::$ACCOUNT_ID_PROPERTY};
            }

            return $this->customDelete($where);
        }

        protected function customDelete(array $where): bool
        {
            if (empty($where)) return false;

            $this->db->table($this->table)->delete($where);

            return ($this->db->affectedRows() >= 0);
        }

        protected function select(array $filter): array
        {
            $builder = $this->db->table($this->table);

            $builder->select($filter['what']);

            if (!empty($filter['where'])) {
                $builder->where($filter['where']);
            }

            if (!empty($filter['whereIn'])) {
                $column = $filter['whereIn']['column'];
                $data = $filter['whereIn']['data'];
                $builder->whereIn($column , $data);
            }

            if (!empty($filter['orderBy'])) {
                $column = $filter['orderBy']['column'];
                $direction = $filter['orderBy']['direction'];
                $builder->orderBy($column , $direction);
            }

            return $builder->get()->getResult('array');
        }

        public function isUniquePropertyExists(string $property, mixed $propertyvalue): bool
        {
            $where =  [
                $this->table . '.' . $property => $propertyvalue
            ];

            if ($this->{Customvalues_helper::$ID_PROPERTY}) {
                $where[$this->table . '.' . Customvalues_helper::$ID_PROPERTY . '!='] = $this->{Customvalues_helper::$ID_PROPERTY};
            }

            return !empty($this->select([
                'what' => [
                    $this->table . '.id'
                ],
                'where' => $where
            ]));
        }

        public function getProperty(string $property): mixed
        {
            $value = $this->select([
                'what' => [
                    $this->table . '.' . $property
                ],
                'where' => [
                    $this->table . '.' . Customvalues_helper::$ID_PROPERTY =>  $this->{Customvalues_helper::$ID_PROPERTY}
                ]
            ]);

            return $value ? $this->formatPropertyValue($property, $value[0]) : null;
        }

    }
