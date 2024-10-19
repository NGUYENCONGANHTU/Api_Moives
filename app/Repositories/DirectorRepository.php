<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Director;  // import model tương ứng
use Exception; 

class DirectorRepository extends BaseRepository
{
     /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Director::class;
    }

    /**
     * Get data by multiple fields
     *
     * @param array $params
     * @return mixed
     */
    public function search($params)
    {
        // default limit
        $limit = config('constant.defaultLimit');
        $query = $this->model->query();

        if (isset($params['name'])) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }

        if (isset($params['status'])) {
            $query = $query->where('status', '=', (int) $params['status']);
        }

        return $query->paginate($limit);
    }
}