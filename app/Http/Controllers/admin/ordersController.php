<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Orders;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function index(){
        $orders = Orders::all();
        if (isset($_GET['status'])) {
            if ($_GET['status'] != '') {
                $orders = $orders->where('status',trim($_GET['status']));
            }
        }
        if (isset($_GET['from_date'])) {
            if ($_GET['from_date'] != '') {
                $orders = $orders->where(date('Y-m-d',strtotime('created_at')),'>=',date('Y-m-d',strtotime($_GET['from_date'])));
            }
        }
        if (isset($_GET['to_date'])) {
            if ($_GET['to_date'] != '') {
                $orders = $orders->where(date('Y-m-d',strtotime('created_at')),'<=',strtotime($_GET['to_date']));
            }
        }
        // $orders = $orders->paginate(20);
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
    public function details($id)
    {

        $order = Orders::find($id);
        return view('AdminPanel.orders.details', [
            'title' => trans('common.orders'),
            'active' => 'order',
            'order' => $order,
            'breadcrumbs' => [
                [
                    'url' => route('publisher.orders'),
                    'text' => trans('common.orders')
                ],
                [
                    'url' => '',
                    'text' => trans('common.order').': #'.$id
                ]
            ]
        ]);
    }
}
