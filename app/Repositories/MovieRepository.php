<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Movie;  // import model tương ứng
use Exception; 

class MovieRepository extends BaseRepository
{
     /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Movie::class;
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

        if (isset($params['director_id'])) {
            $query = $query->where('director_id', '=', (int) $params['director_id']);
        }

        if (isset($params['id_theater'])) {
            $query = $query->where('id_theater', '=', (int) $params['id_theater']);
        }

        if (isset($params['actors_id'])) {
            $query = $query->where('actors_id', '=', (int) $params['actors_id']);
        }

        if (isset($params['price'])) {
            $query = $query->where('price', '=', (int) $params['price']);
        }

        if (isset($params['status'])) {
            $query = $query->where('status', '=', (int) $params['status']);
        }

        return $query->paginate($limit);
    }
}