<?php

namespace App\Repository;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{

    /**
     * Get all record
     *
     * @param array $collumn
     * @param int $faculty
     */
    public function all(array $collumn = ['*']);



    /**
     * Filter Request
     *
     * @param [type] $query
     * @param [type] $request
     */
    public function scopeFilter();



    /**
     * Get first recoed
     *
     * @param array $columns
     */
    public function first(array $columns = ['*']);



    /**
     * Paginate
     *
     * @param int $limit
     * @param array $columns
     */
    public function paginate(int $limit = null, array $columns = ['*']);



    /**
     * Find record by id
     *
     * @param int $id
     * @param array $columns
     */
    public function find(int $id, array $columns = ['*']);



    /**
     * Search
     *
     * @param string $field
     * @param any $value
     * @param array $columns
     */
    public function findByField(string $field, $value, array $columns = ['*']);



    /**
     * Where
     *
     * @param array $where
     * @param array $columns
     */
    public function where(array $where, array $columns = ['*']);



    /**
     * Find by result by multiple values in one field
     *
     * @param string $field
     * @param array $where
     * @param array $columns
     */
    public function whereIn(string $field, array $where, array $columns = ['*']);



    /**
     * whereNotIn
     *
     * @param string $field
     * @param array $where
     * @param array $columns
     */
    public function whereNotIn(string $field, array $where, array $columns = ['*']);



    /**
     * Create new record
     *
     * @param array $attributes
     */
    public function create(array $attributes);



    /**
     * Update Record
     *
     * @param array $attributes
     * @param int $id
     */
    public function update(array $attributes, int $id);



    /**
     * Delete Record (soft delete)
     *
     * @param int $id
     */
    public function delete(int $id);



    /**
     * Get all trashed item
     *
     * @param array $columns
     */
    public function getDeletedItem(array $columns = ['*']);



    /**
     * Restore trashed record
     *
     * @param array $columns
     */
    public function restore(int $id);



    /**
     * Destroy record (force delete)
     *
     * @param integer $id
     */
    public function destroy(int $id);



    /**
     * Order by culumn
     *
     * @param string $column
     * @param string $direction
     * @return void
     */
    public function orderBy(string $column, string $direction = 'asc');



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
    ): LengthAwarePaginator;
}
