<?php

namespace App\Repositories;


use App\Helper\RedisHelper;
use App\Models\Assets\AssetAllocationNorms;
use App\Models\Assets\AssetClassification;
use App\Models\Assets\AssetType;
use App\Models\Assets\AssetTypeGroup;
use App\Models\Assets\AssetWarehouse;
use App\Models\Assets\SupplierAssets;
use App\Models\Dishes\Dishes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use function Symfony\Component\Finder\name;

class DishesRepositories implements DishesInterface
{
    protected $dishes;

    public function __construct()
    {
        $this->dishes = app()->make(Dishes::class);
    }

    /***
     * get dishes
     */

    public function get($filter)
    {
        $query = $this->dishes::query();
        if (isset($filter['id'])) {
            $query = $query->where('id', $filter['id']);
        }
        if (isset($filter['name'])) {
            $query = $query->where('name', 'like', '%' . $filter['name'] . '%');
        }
        if (isset($filter['availableMeals'])) {
            $query = $query->where('availableMeals', 'like', '%' . $filter['availableMeals'] . '%');
        }
        if (isset($filter['get_all'])) {
            $query = $query->get();
            $dishesList = [];
            foreach ($query as $key => $value) {
                $dishesList[$value['id']] = $value;
            }
        } else {
            $dishesList = $query->paginate($filter['limit'] ?? 25);
        }

        return response()->json([
            'dishesList' => $dishesList,
        ]);

    }

    /***
     * Created dishes
     */

    public function create($data)
    {

    }

    /**
     * @param $table
     * @param $params
     * Hàm xử lí chức năng thêm dữ liệu
     */
    public function store($table, $params)
    {

    }

    /**
     * @param $table
     * @param $params
     * Hàm xử lí chức năng cập nhật dữ liệu
     */
    public function update($table, $params)
    {

    }

    /**
     * @param $table
     * @param $params
     * Hàm xử lí chức năng xóa dữ liệu
     */
    public function delete($table, $params)
    {

    }

    public function hashValidData($validData, $data)
    {
        $hashData = [];
        foreach ($validData as $key) {
            if (isset($data[$key])) {
                $hashData[] = $data[$key];
            }
        }
        return $hashData;
    }


}
