<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name'  => 'Gify Tech',
            'web'   => 'https://gify.tech/',
            'phone' => $this->gantiformat('085767113554'),
            'email' => 'gify.tech@mail.com',
            'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
        ]);

        Company::create([
            'name'  => 'Facebook',
            'web'   => 'https://www.facebook.com/',
            'phone' => $this->gantiformat('085767113554'),
            'email' => 'facebook@mail.com',
            'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
        ]);

        Company::create([
            'name'  => 'Google',
            'web'   => 'https://www.google.com/',
            'phone' => $this->gantiformat('085767113554'),
            'email' => 'google@mail.com',
            'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
        ]);
    }

    public function gantiformat($nomorhp) {
        $nomorhp = trim($nomorhp);
        $nomorhp = strip_tags($nomorhp);
        $nomorhp= str_replace(" ","",$nomorhp);
        $nomorhp= str_replace("(","",$nomorhp);
        $nomorhp= str_replace(".","",$nomorhp);

        if(!preg_match('/[^+0-9]/',trim($nomorhp))){
            if(substr(trim($nomorhp), 0, 3)=='+62'){
                $nomorhp= trim($nomorhp);
            }
            elseif(substr($nomorhp, 0, 1)=='0'){
                $nomorhp= '+62'.substr($nomorhp, 1);
            }
        }
        return $nomorhp;
    }
}
