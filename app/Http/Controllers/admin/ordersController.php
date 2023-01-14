<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function index(){
        $orders = Orders::whereIn('status', ['done','pending','review']);
        // dd($orders);
        if (isset($_GET['status'])) {
            if ($_GET['status'] != '') {
                $orders = $orders->where('status',trim($_GET['status']));
            }
        }
        if (isset($_GET['from_date'])) {
            if ($_GET['from_date'] != '') {
                $orders = $orders->where('date_time_str','>=',strtotime($_GET['from_date']));
                // dd($orders,strtotime($_GET['from_date']));
            }
        }
        if (isset($_GET['to_date'])) {
            if ($_GET['to_date'] != '') {
                $orders = $orders->where('date_time_str','<=',strtotime($_GET['to_date']));
            }
        }
        $orders = $orders->paginate(10);
        return view('AdminPanel.orders.index', [
            'title' => 'الطلبات',
            'active' => 'orders',
            'orders' => $orders,
            'breadcrumbs' => [
                [
                    'url' => '',
                    'text' => 'الطلبات'
                ]
            ]
        ]);
    }
}
