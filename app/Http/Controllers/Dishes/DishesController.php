<?php

namespace App\Http\Controllers\Dishes;

use App\Helpers\FlashMessages;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisHes\DishesRequest;
use App\Models\Dishes\Dishes;
use App\Repositories\DishesInterface;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    use FlashMessages;

    protected $dishes;

    public function __construct(DishesInterface $dishes)
    {
        $this->dishes = $dishes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->all();
        $query = $this->dishes->get($filter);
        return $query;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DishesRequest $request)
    {
        self::success(__('Bạn đã tạo đơn hàng thành công!'));
        return back();
        //CRUD sau khi vượt qua validate
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
