<?php
namespace Database\Seeders;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        // Get user IDs for receive_by and sent_by
        $userIds = User::pluck('id')->toArray();

        // Create sample notifications
        for ($i = 1; $i <= 10; $i++) {
            Notification::create([
                'title' => 'Notification ' . $i,
                'message' => 'Sample notification ' . $i,
                'is_read' => false,
                'type' => 'notification',
                'receive_by' => '1',
                'sent_by' => '2',
            ]);
        }
    }
}
