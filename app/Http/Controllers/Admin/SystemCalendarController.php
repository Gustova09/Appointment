<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\App\Models\Appointment',
            'date_field' => 'start_time',
            'field'      => 'comments',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.appointments.edit',
        ],
        [
            'model'      => '\App\Models\AssetStatus',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.asset-statuses.edit',
        ],
    ];

    public function index()
    {
        $events = [];
        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (! $crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . ' ' . $model->{$source['field']} . ' ' . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
