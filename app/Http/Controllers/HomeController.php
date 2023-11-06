<?php

namespace App\Http\Controllers;

use App\Charts\customerCharts;
use App\Models\Customer;
use App\Models\DetailTransaksi;
use App\Models\Membership;
use App\Models\Transaksi;
use App\Models\Valas;
use App\Charts\TransaksiCharts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(TransaksiCharts $chart, customerCharts $customerCharts)
    {
        $totalValas = Valas::count();
        $totalCustomer = Customer::count();
        $totalMembership = Membership::count();
        $totalTransaksi = Transaksi::count();
        $transaksiChart = $chart->build();
        $customerChart = $customerCharts->build();

        return view('home', compact('totalValas', 'totalCustomer', 'totalMembership', 'totalTransaksi', 'transaksiChart', 'customerChart'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(TransaksiCharts $chart, customerCharts $customerCharts)
    {
        $totalValas = Valas::count();
        $totalCustomer = Customer::count();
        $totalMembership = Membership::count();
        $totalTransaksi = Transaksi::count();
        $transaksiChart = $chart->build();
        $customerChart = $customerCharts->build();

        return view('adminHome', compact('totalValas', 'totalCustomer', 'totalMembership', 'totalTransaksi', 'transaksiChart', 'customerChart'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superAdminHome(TransaksiCharts $chart, customerCharts $customerCharts)
    {
        $totalValas = Valas::count();
        $totalCustomer = Customer::count();
        $totalMembership = Membership::count();
        $totalTransaksi = Transaksi::count();
        $transaksiChart = $chart->build();
        $customerChart = $customerCharts->build();

        return view('superAdminHome', compact('totalValas', 'totalCustomer', 'totalMembership', 'totalTransaksi', 'transaksiChart', 'customerChart'));

    }

}