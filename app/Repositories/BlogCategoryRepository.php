<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use App\Models\BlogCategory as Model;

/**
 * Class BlogCategoryRepository
 *
 * @package App\Repositories
 */
class BlogCategoryRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Get model for edit in admin panel.
     *
     * @param int $id
     *
     * @return Model
     */
    public function getEdit(int $id): Model
    {
        return $this->startConditions()->find($id);
    }

    /**
     * Get list of categories to display in combo box.
     *
     * @return array
     */
    public function getForComboBox()
    {
       $columns = implode(', ', [
          'id',
          'CONCAT (id, ". ", title) AS id_title',
       ]);

//       $result[] = $this->startConditions()->all();
//       $result[] = $this
//           ->startConditions()
//           ->select('blog_categories.*',
//               \DB::raw('CONCAT (id, ". ", title) AS id_title'))
//           ->toBase()
//           ->get();

       $result = $this
           ->startConditions()
           ->selectRaw($columns)
           ->toBase()
           ->get();

       return $result;
    }

    /**
     * Get categories to display by paginator.
     *
     * @param int|null $perPage
     *
     * @return LengthAwarePaginator
     */

    public function getAllWithPaginate(int $perPage = null): LengthAwarePaginator
    {
        $columns = ['id', 'title', 'parent_id'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->paginate($perPage);

        return $result;
    }
}
