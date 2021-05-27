<?php

namespace App\Repository;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Throwable;

abstract class BaseRepository implements BaseRepositoryInterface
{

    protected $model = null;
    protected $request = null;
    public $fillterable = ['title', 'created_at', 'display_order', 'view_count', 'status'];

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
     * Filter Request
     *
     * @param [type] $query
     * @param [type] $request
     */
    public function scopeFilter()
    {
        // E.x: /?sort=status:desc&q=first_name:admin&filter=price:300,500:in;date:30-05-2000,20-11-2000:between

        $fillterable = $this->fillterable ?? [];

        // [$column, $direction]
        $sortParam = $this->request->filled('sort')
            ? $this->request->input('sort') : '';
        $sortFilter = explode(':', $sortParam);



        // [[$column, [$value, ...], $where],...]
        $filterParam = $this->request->filled('filter')
            ? $this->request->input('filter') : '';
        $filters = explode(';', $filterParam);



        // [$column, $value]
        $searchParam = $this->request->filled('q')
            ? $this->request->input('q') : '';
        $searchFilter = explode(':', $searchParam);



        if (count($sortFilter) == 2) {
            $sortField = $sortFilter[0];
            $sortDirection = $sortFilter[1];

            if (in_array($sortField, $fillterable))
                $this->model = $this->model->orderBy($sortField, $sortDirection);
        }


        if (count($searchFilter) == 2) {
            $searchField = $searchFilter[0];
            $searchValue = $searchFilter[1];

            if (in_array($searchField, $fillterable))
                $this->model = $this->model->where($searchField, 'LIKE', '%' . $searchValue . '%');
        }


        foreach ($filters as $filter) {
            $filterItem = explode(':', $filter);
            if (count($filterItem) >= 2 && count($filterItem) < 4) {
                $filterColumn = $filterItem[0];
                $filterValue = explode(',', $filterItem[1]);
                $filterWhere = isset($filterItem[2]) ? $filterItem[2] : null;

                if (in_array($filterColumn, $fillterable))
                    switch (strtolower($filterWhere)) {
                        case 'between':
                            $this->model = $this->model->whereBetween($filterColumn, $filterValue);
                            break;
                        case 'notin':
                            $this->model = $this->model->whereNotIn($filterColumn, $filterValue);
                            break;
                        default:
                            $this->model = $this->model->whereIn($filterColumn, $filterValue);
                            break;
                    }
            }
        }
    }



    /**
     * Get all record
     *
     * @param array $collumn
     * @param int $faculty
     */
    public function all(array $columns = ['*'])
    {
        return $this->model->select($columns)->all();
    }



    /**
     * Get first recoed
     *
     * @param array $columns
     */
    public function first(array $columns = ['*'])
    {
        return $this->model->select($columns)->first();
    }



    /**
     * Paginate
     *
     * @param int $limit
     * @param array $columns
     */
    public function paginate(int $limit = null, array $columns = ['*'])
    {
        return $this->model->select($columns)->paginate($limit);
    }



    /**
     * Find record by id
     *
     * @param int $id
     * @param array $columns
     */
    public function find(int $id, array $columns = ['*'])
    {
        return $this->model->select($columns)->findOrFail($id);
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
        return $this->model->select($columns)
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
        return $this->model->select($columns)
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
        return $this->model->select($columns)
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
        return $this->model->select($columns)
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
     * Delete Record (soft delete)
     *
     * @param int $id
     */
    public function delete(int $id)
    {
        $record = $this->find($id);

        $record->delete();

        return $record;
    }



    /**
     * Get all trashed item
     *
     * @param array $columns
     */
    public function getDeletedItem(array $columns = ['*'])
    {
        return $this->model->select($columns)
            ->onlyTrashed()
            ->get();
    }



    /**
     * Restore trashed record
     *
     * @param array $columns
     */
    public function restore(int $id)
    {
        return $this->model::withTrashed()
            ->where('id', $id)
            ->restore();
    }



    /**
     * Destroy record (force delete)
     *
     * @param integer $id
     */
    public function destroy(int $id)
    {
        $this->model::destroy($id);
    }



    /**
     * Order by culumn
     *
     * @param string $column
     * @param string $direction
     */
    public function orderBy(string $column, string $direction = 'asc')
    {
        return $this->model::orderBy($column, $direction);
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
            $listRecord = $this->model->select($collumns)
                ->where($where)
                ->orderBy($order['column'], $order['direction'])
                ->paginate($paginate['limit']);
        } catch (Throwable $th) {
            throw $th;
        }

        return $listRecord;
    }
}
