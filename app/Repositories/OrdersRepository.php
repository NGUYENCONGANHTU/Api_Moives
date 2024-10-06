<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Orders;
use Exception;

class OrdersRepository extends BaseRepository
{
     /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Orders::class;
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
        $query = $this->model->query(); // list model

        if (isset($params['name'])) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }
        
        if (isset($params['phone'])) {
            $query->where('phone', 'like', '%' . $params['phone'] . '%');
        }

        if (isset($params['created_at'])) {
            $query->where('created_at', 'like', '%'.$params['created_at'].'%');
        }

        if (isset($params['status'])) {
            $query = $query->where('status', '=', (int) $params['status']);
        }

        return $query->paginate($limit); // list
    }

    public function userOrder($userId)
    {
        if($userId == null)
        {
            throw new Exception(" User does not exist ");
        }

        return $this->model->where('user_id',$userId)->get();
    }
}