<?php

namespace App\Repository;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Throwable;

abstract class BaseRepository implements BaseRepositoryInterface
{

    protected $model = null;

    public function __construct(Request $request)
    {
        $this->setModel();
        $this->request = $request;
    }

    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }


    /**
     * Get all record
     *
     * @param array $collumn
     * @param int $faculty
     */
    public function all(array $columns = ['*'])
    {
        return $this->model::select($columns)->all();
    }



    /**
     * Get first recoed
     *
     * @param array $columns
     */
    public function first(array $columns = ['*'])
    {
        return $this->model::select($columns)->first();
    }



    /**
     * Paginate
     *
     * @param int $limit
     * @param array $columns
     */
    public function paginate(int $limit = null, array $columns = ['*'])
    {
        return $this->model::select($columns)->paginate($limit);
    }



    /**
     * Find record by id
     *
     * @param int $id
     * @param array $columns
     */
    public function find(int $id, array $columns = ['*'])
    {
        return $this->model::select($columns)->findOrFail($id);
    }



    /**
     * Search
     *
     * @param string $field
     * @param any $value
     * @param array $columns
     */
    public function findByField(string $field, $value, array $columns = ['*'])
    {
        return $this->model::select($columns)
            ->where([$field => $value])
            ->first();
    }



    /**
     * Where
     *
     * @param array $where
     * @param array $columns
     */
    public function where(array $where, array $columns = ['*'])
    {
        return $this->model::select($columns)
            ->where($where)
            ->first();
    }



    /**
     * Find by result by multiple values in one field
     *
     * @param string $field
     * @param array $where
     * @param array $columns
     */
    public function whereIn(string $field, array $where, array $columns = ['*'])
    {
        return $this->model::select($columns)
            ->whereIn($where)
            ->first();
    }



    /**
     * whereNotIn
     *
     * @param string $field
     * @param array $where
     * @param array $columns
     */
    public function whereNotIn(string $field, array $where, array $columns = ['*'])
    {
        return $this->model::select($columns)
            ->whereNotIn($where)
            ->first();
    }



    /**
     * Create new record
     *
     * @param array $attributes
     */
    public function create(array $attributes)
    {
        $newRecord = new $this->model($attributes);

        $newRecord->save();

        return $newRecord;
    }



    /**
     * Update Record
     *
     * @param array $attributes
     * @param int $id
     */
    public function update(array $attributes, int $id)
    {
        $record = $this->find($id);

        $record->fill($attributes);
        $record->save();

        return $record;
    }



    /**
     * Delete Record
     *
     * @param int $id
     */
    public function delete(int $id)
    {
        $record = $this->find($id);

        $record->save();

        return $record;
    }



    /**
     * Order by culumn
     *
     * @param string $column
     * @param string $direction
     */
    public function orderBy(string $column, string $direction = 'asc')
    {
        return $this->model->orderBy($column, $direction);
    }



    /**
     * Get List of record
     *
     * @param array $where
     * @param array $order
     * @param array $paginate
     * @param array $column
     * @return LengthAwarePaginator
     *
     */
    public function getList(
        array $where = [],
        array $order = [
            'column' => 'id',
            'direction' => 'asc'
        ],
        array $paginate = [
            'limit' => 15
        ],
        array $collumns = ['*']
    ): LengthAwarePaginator {

        $listRecord = [];

        try {
            $listRecord = $this->model
                ->select($collumns)
                ->where($where)
                ->orderBy($order['column'], $order['direction'])
                ->paginate($paginate['limit']);
        } catch (Throwable $th) {
            throw $th;
        }

        return $listRecord;
    }
}
