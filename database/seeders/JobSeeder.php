<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desc = 'It is a long established fact that a reader will beff distracted by vbthe creadable content of a page when looking at its layout. The pointf of using Lorem Ipsum is that it has ahf mcore or-lgess normal distribution of letters, as opposed to using, Content here content here making it look like readable.';
        $req = '<ul>
                    <li>System Software Development</li>
                    <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                    <li>Research and code , libraries, APIs and frameworks</li>
                    <li>Strong knowledge on software development life cycle</li>
                    <li>Strong problem solving and debugging skills</li>
                </ul>';
        $edu = '<ul>
                    <li>3 or more years of professional design experience</li>
                    <li>Direct response email experience</li>
                    <li>Ecommerce website design experience</li>
                    <li>Familiarity with mobile and web apps preferred</li>
                    <li>Experience using Invision a plus</li>
                </ul>';

        Job::create([
            'name'          => 'Digital Marketer',
            'category_id'   => '3',
            'company_id'    => '1',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list1.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Full Time',
        ]);

        Job::create([
            'name'          => 'Web Developer',
            'category_id'   => '6',
            'company_id'    => '1',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list2.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Hybrid',
        ]);

        Job::create([
            'name'          => 'Flutter Developer',
            'category_id'   => '4',
            'company_id'    => '2',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list3.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Full Time',
        ]);

        Job::create([
            'name'          => 'PHP Developer',
            'category_id'   => '6',
            'company_id'    => '3',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list4.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Hybrid',
        ]);

        Job::create([
            'name'          => 'Digital Marketer',
            'category_id'   => '3',
            'company_id'    => '1',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list1.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Full Time',
        ]);

        Job::create([
            'name'          => 'Content Writer',
            'category_id'   => '8',
            'company_id'    => '1',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list2.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Hybrid',
        ]);

        Job::create([
            'name'          => 'Content Writer',
            'category_id'   => '8',
            'company_id'    => '2',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list3.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Full Time',
        ]);

        Job::create([
            'name'          => 'Content Writer',
            'category_id'   => '8',
            'company_id'    => '3',
            'salary_min'    => 4000000,
            'salary_max'    => 6500000,
            'desc'          => $desc,
            'req'           => $req,
            'edu'           => $edu,
            'thumbnail'     => 'job-list4.png',
            'location'      => 'DKI Jakarta, Indonesia',
            'job_nature'    => 'Hybrid',
        ]);
    }
}
