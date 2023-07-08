<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialMediaLink;

class SocialMediaLinkSeeder extends Seeder
{
    public function run()
    {
        SocialMediaLink::create([
            'platform' => 'Facebook',
            'link' => 'https://www.facebook.com/example',
            'uid' => '1',
        ]);

        SocialMediaLink::create([
            'platform' => 'Twitter',
            'link' => 'https://www.twitter.com/example',
            'uid' => '1',
        ]);

        SocialMediaLink::create([
            'platform' => 'Instagram',
            'link' => 'https://www.instagram.com/example',
            'uid' => '1',
        ]);

        // Add more social media links as needed
    }
}
