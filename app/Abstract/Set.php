<?php

    declare(strict_types=1);

    namespace App\Abstract;

    use App\Abstract\Crud;

    use App\Helpers\Validate_helper;
    use App\Helpers\Customvalues_helper;

    abstract class Set extends Crud
    {

        abstract protected function formatPropertyValue(string $property, mixed $value): mixed;

        private array $publicPropertes = [];

        public function __construct()
        {
            parent::__construct();

            $this->setPublicProperties();
        }

        public function setProperty(string $property, mixed $value): object
        {
            $this->{$property} = $this->formatPropertyValue($property, $value);

            return $this;
        }

        private function setPublicProperties(): void
        {
            $reflect = new \ReflectionClass($this);

            $this->publicPropertes = array_map(function($el) {
                return $el->name;
            }, $reflect->getProperties(\ReflectionProperty::IS_PUBLIC));

            return;
        }

        protected function getPublicProperties(): array
        {
            return $this->publicPropertes;
        }

        protected function setObjectId(mixed $id): object
        {
            if (Validate_helper::validatePositiveInteger($id)) {
                $this->setProperty(Customvalues_helper::$ID_PROPERTY, $id);
            }

            return $this;
        }

        protected function setObject(): object
        {
            $table = $this->getThisTable();
            $data = $this->select([
                'what' => $table . '.*',
                'where' => [
                    $table . '.' . Customvalues_helper::$ID_PROPERTY => $this->{Customvalues_helper::$ID_PROPERTY}
                ]
            ]);

            if (!empty($data)) {
                $data = reset($data);
                foreach($data as $property => $value) {
                    $this->setProperty($property, $value);
                }
            }

            return $this;
        }

    }
