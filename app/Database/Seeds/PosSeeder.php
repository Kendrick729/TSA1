<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run()
    {
        $createdAt = date('Y-m-d H:i:s');
        $today = date('Y-m-d');

        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review project brief', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('-2 days')), 'created_at' => $createdAt],
            ['title' => 'Prepare meeting agenda', 'status' => 'in_progress', 'task_date' => date('Y-m-d', strtotime('-1 day')), 'created_at' => $createdAt],
            ['title' => 'Check daily sales report', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => 'Update CRM records', 'status' => 'in_progress', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => 'Reply to client emails', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => 'Submit weekly status update', 'status' => 'completed', 'task_date' => date('Y-m-d', strtotime('+1 day')), 'created_at' => $createdAt],
            ['title' => 'Review inventory counts', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+2 days')), 'created_at' => $createdAt],
            ['title' => 'Plan next sprint tasks', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+3 days')), 'created_at' => $createdAt],
        ]);

        $this->db->table('users')->insert([
            'username' => 'kendrick729',
            'full_name' => 'Kendrick',
            'email' => 'kendrick@example.com',
            'created_at' => $createdAt,
        ]);
    }
}
