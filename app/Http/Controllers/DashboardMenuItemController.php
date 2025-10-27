<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMenuItemController extends Controller
{
    //

    public function index() {
        return auth()->user()->dashboard_menu_items();
    }

    public function store(Request $request){
        $menuItem = auth()->user()->dashboard_menu_items()->create($request->all());
        return response()->json($menuItem, 201);
    }
}
