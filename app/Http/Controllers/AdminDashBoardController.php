<?php

namespace App\Http\Controllers;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;

class AdminDashBoardController extends Controller
{
    public function index()
    {
        $chart_options = [
            'chart_title' => 'Пользователей за месяц',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Записей за месяц',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Appointment',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart2 = new LaravelChart($chart_options);
        
        return view('dashboard', compact('chart1', 'chart2'));
    }
}
