<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'CAPEK',
            'description'    => 'AKU CAPEK!!!',
            'finished_at'    => "2022-04-04-03:00",
        ];

        // Simple Queries
        $this->db->table('todo')->insert($data);
        
        $data = [
            'title' => 'LELAH',
            'description'    => 'AKU LELAH!!!',
            'finished_at'    => "2022-04-04-03:00",
        ];
        // Using Query Builder
        $this->db->table('todo')->insert($data);

        $data = [
            'title' => 'TAK SUDI',
            'description'    => 'AKU TAK SUDI!!!',
            'finished_at'    => "2022-04-04-03:00",
        ];
        // Using Query Builder
        $this->db->table('todo')->insert($data);
    }
}