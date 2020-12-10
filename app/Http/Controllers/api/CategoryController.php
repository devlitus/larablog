<?php

namespace App\Http\Controllers\api;

use App\Models\Category;

class CategoryController extends ApiResponseController
{
    public function index()
    {
        return $this->successResponse(["category" =>Category::paginate(5)]);
    }

    public function all()
    {
        return $this->successResponse(["category" =>Category::all()]);
    }
}
