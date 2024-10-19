<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Cinema;
use Exception; 

class CinemaRepository extends BaseRepository
{
     /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cinema::class;
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

        if (isset($params['id_place_theater'])) {
            $query = $query->where('id_place_theater', '=', (int) $params['id_place_theater']);
        }

        if (isset($params['status'])) {
            $query = $query->where('status', '=', (int) $params['status']);
        }

        return $query->paginate($limit);
    }
}