<?php
    declare(strict_types=1);

    namespace App\Interfaces;

    Interface IntercafeCrud
    {

        public function save(array $data): bool;
        public function set(): object;
        public function fetch(array $filter): null|array;
        public function customUpdate(array $data, array $where): bool;

    }
