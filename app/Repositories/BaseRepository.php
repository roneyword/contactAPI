<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\InterfaceRepository;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements InterfaceRepository
{
    public function __construct(protected Model $model)
    {}

    public function findAll(array $fields = ['*'],string $column = 'id',string $order = 'DESC'): array
    {
        return $this->model->select($fields)->orderBy($column,$order)->get()->toArray();
    }

    public function findById(int|string $id): array|null
    {
        return $this->model->find($id)?->toArray();
    }

    public function create(array $data): array
    {
        return $this->model->create($data)->toArray();
    }

    public function update(int|string $id, array $data): bool
    {
        $model = $this->model->find($id);

        if (!$model) return false;

        return $model->update($data);
    }

    public function delete(int|string $id): bool
    {
        $model = $this->model->find($id);

        if (!$model) return false;

        return $model->delete();
    }
    
}
