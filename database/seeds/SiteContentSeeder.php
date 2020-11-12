<?php

use Illuminate\Database\Seeder;
use App\SiteContent;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContent::create([
            'name' => 'banner',
            'content' => json_encode([
                'title' => 'EVERY STUDENT YEARNS TO LEARN',
                'subtitle' => 'Making Your World Better',
                'desc' => "Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",

            ]),
        ]);

           SiteContent::create([
            'name' => 'courses',
            'content' => json_encode([
                'title' => 'our courses',
                'subtitle' => 'diffrent categories',

            ]),
        ]);

                   SiteContent::create([
            'name' => 'medone',
            'content' => json_encode([
                'title' => 'our site have Awesome',
                'subtitle' => 'Feature',
                'desc' => "Set have great you male grass yielding an yielding first their you're have called the abundantly fruit were man",

            ]),
        ]);

                   SiteContent::create([
            'name' => 'medtwo',
            'content' => json_encode([
                'title' => 'First Future',
                'subtitle' => 'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male',
            ]),
        ]);

                    SiteContent::create([
            'name' => 'medthree',
            'content' => json_encode([
                'title' => 'Qualified Trainers',
                'subtitle' => 'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male',
            ]),
        ]);

                    SiteContent::create([
            'name' => 'medfour',
            'content' => json_encode([
                'title' => 'Job Oppurtunity',
                'subtitle' => 'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male',
            ]),
        ]);
        
    }
}