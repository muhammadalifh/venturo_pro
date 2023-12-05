<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuListController extends Controller
{
    public function __invoke(Request $request)
    {
        // return response()->json([
        //     'data' => Menu::all()
        // ]);

        $menus = Menu::all();
        return MenuResource::collection($menus);
    }
}
