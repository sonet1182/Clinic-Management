<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            // ['name' => 'division-list', 'group_name' => 'division'],
            // ['name' => 'division-create', 'group_name' => 'division'],
            // ['name' => 'division-edit', 'group_name' => 'division'],
            // ['name' => 'division-delete', 'group_name' => 'division'],

            // ['name' => 'district-list', 'group_name' => 'district'],
            // ['name' => 'district-create', 'group_name' => 'district'],
            // ['name' => 'district-edit', 'group_name' => 'district'],
            // ['name' => 'district-delete', 'group_name' => 'district'],

            // ['name' => 'thana-list', 'group_name' => 'thana'],
            // ['name' => 'thana-create', 'group_name' => 'thana'],
            // ['name' => 'thana-edit', 'group_name' => 'thana'],
            // ['name' => 'thana-delete', 'group_name' => 'thana'],

            // ['name' => 'brand-list', 'group_name' => 'brand'],
            // ['name' => 'brand-create', 'group_name' => 'brand'],
            // ['name' => 'brand-edit', 'group_name' => 'brand'],
            // ['name' => 'brand-delete', 'group_name' => 'brand'],

            // ['name' => 'offer-list', 'group_name' => 'offer'],
            // ['name' => 'offer-create', 'group_name' => 'offer'],
            // ['name' => 'offer-edit', 'group_name' => 'offer'],
            // ['name' => 'offer-delete', 'group_name' => 'offer'],

            // ['name' => 'category-list', 'group_name' => 'category'],
            // ['name' => 'category-create', 'group_name' => 'category'],
            // ['name' => 'category-edit', 'group_name' => 'category'],
            // ['name' => 'category-delete', 'group_name' => 'category'],

            ['name' => 'promo-code-list', 'group_name' => 'promo-code'],
            ['name' => 'promo-code-create', 'group_name' => 'promo-code'],
            ['name' => 'promo-code-edit', 'group_name' => 'promo-code'],
            ['name' => 'promo-code-delete', 'group_name' => 'promo-code'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
