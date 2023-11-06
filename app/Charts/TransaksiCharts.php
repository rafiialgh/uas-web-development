<?php

namespace App\Charts;

use App\Models\DetailTransaksi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class transaksiCharts
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $detailTransaksi = DetailTransaksi::all();
        $data = [
            $detailTransaksi->where('nama_valas', 'USD')->count(),
            $detailTransaksi->where('nama_valas', 'SGD')->count(),
            $detailTransaksi->where('nama_valas', 'EUR')->count(),
        ];

        return $this->chart->barChart()
            ->setTitle('Grafik Penjualan Valas')
            ->setSubtitle('Penjualan Valas')
            ->addData('Valas', $data)
            ->setXAxis(['USD', 'SGD', 'EUR']);
    }
}
