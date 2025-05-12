<?php

declare(strict_types=1);

namespace App\Services;

interface ServiceInterface
{
    public function findAll(array $fields = ['*'],string $column = 'id',string $order = 'DESC'): array;
    public function findById(int|string $id): array|null;
    public function create(array $data): array;
    public function update(int|string $id, array $data): bool;
    public function delete(int|string $id): bool;
   
}
