<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Chart;

class Appointments extends Chart
{
    /**
     * Add a title to the Chart.
     *
     * @var string
     */
    protected $title = 'Список записей';

    protected $description = 'Список записей пользователей, удобно отсорованный по месяцам';

    /**
     * Available options:
     * 'bar', 'line',
     * 'pie', 'percentage'.
     *
     * @var string
     */
    protected $type = 'bar';

    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the chart.
     *
     * @var string
     */
    protected $target = 'appointments';
}
