<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        $menus = Menu::all();
        $reservations = Reservation::all();
        return view('admin.index', compact('users', 'menus', 'categories', 'reservations'));
    }
}
