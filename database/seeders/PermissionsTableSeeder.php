<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'service_create',
            ],
            [
                'id'    => 18,
                'title' => 'service_edit',
            ],
            [
                'id'    => 19,
                'title' => 'service_show',
            ],
            [
                'id'    => 20,
                'title' => 'service_delete',
            ],
            [
                'id'    => 21,
                'title' => 'service_access',
            ],
            [
                'id'    => 22,
                'title' => 'employee_create',
            ],
            [
                'id'    => 23,
                'title' => 'employee_edit',
            ],
            [
                'id'    => 24,
                'title' => 'employee_show',
            ],
            [
                'id'    => 25,
                'title' => 'employee_delete',
            ],
            [
                'id'    => 26,
                'title' => 'employee_access',
            ],
            [
                'id'    => 27,
                'title' => 'client_create',
            ],
            [
                'id'    => 28,
                'title' => 'client_edit',
            ],
            [
                'id'    => 29,
                'title' => 'client_show',
            ],
            [
                'id'    => 30,
                'title' => 'client_delete',
            ],
            [
                'id'    => 31,
                'title' => 'client_access',
            ],
            [
                'id'    => 32,
                'title' => 'appointment_create',
            ],
            [
                'id'    => 33,
                'title' => 'appointment_edit',
            ],
            [
                'id'    => 34,
                'title' => 'appointment_show',
            ],
            [
                'id'    => 35,
                'title' => 'appointment_delete',
            ],
            [
                'id'    => 36,
                'title' => 'appointment_access',
            ],
            [
                'id'    => 37,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 38,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 39,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 40,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 41,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 42,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 43,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 44,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 45,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 46,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 47,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 48,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 49,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 50,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 51,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 52,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 53,
                'title' => 'asset_create',
            ],
            [
                'id'    => 54,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 55,
                'title' => 'asset_show',
            ],
            [
                'id'    => 56,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 57,
                'title' => 'asset_access',
            ],
            [
                'id'    => 58,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 59,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 60,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 61,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 62,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 63,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 64,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 65,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 66,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 67,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 68,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 69,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 70,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 71,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 72,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 73,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 74,
                'title' => 'task_create',
            ],
            [
                'id'    => 75,
                'title' => 'task_edit',
            ],
            [
                'id'    => 76,
                'title' => 'task_show',
            ],
            [
                'id'    => 77,
                'title' => 'task_delete',
            ],
            [
                'id'    => 78,
                'title' => 'task_access',
            ],
            [
                'id'    => 79,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 80,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
