<?php

namespace App\Charts;

use App\Models\Membership;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class customerCharts
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $membership = Membership::all();
        $data = [
            $membership->where('nama', 'SILVER')->count(),
            $membership->where('nama', 'GOLD')->count(),
            $membership->where('nama', 'DIAMOND')->count(),
        ];

        return $this->chart->barChart()
            ->setTitle('Grafik Membership')
            ->setSubtitle('Membership')
            ->addData('Membership', $data)
            ->setXAxis(['SILVER', 'GOLD', 'DIAMOND']);
    }
}
