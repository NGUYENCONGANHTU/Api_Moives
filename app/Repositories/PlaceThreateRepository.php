<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\PlaceThreate;
use Exception; 

class PlaceThreateRepository extends BaseRepository
{
     /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PlaceThreate::class;
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

        return $query->paginate($limit);
    }
}