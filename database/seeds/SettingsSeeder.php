<?php

use Illuminate\Database\Seeder;
use anlutro\LaravelSettings\Facade as Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::set('company_name', 'Minya Tour');
        Setting::set('company_email', 'help@email.com');
        Setting::set('company_phone', '01065165640');
        Setting::set('company_address', 'This is Our Description');
        Setting::set('company_city', 'Minya');
        Setting::set('company_logo', 'http://i.imgur.com/4URuWyi.png');
        Setting::set('company_currency_symbol', 'EGP');
        Setting::set('record_per_page', 10);
        Setting::set('default_role', 2);
        Setting::set('max_login_attempts', 3);
        Setting::set('lockout_delay', 2);
        Setting::save();
    }
}
