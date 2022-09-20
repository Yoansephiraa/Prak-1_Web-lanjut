Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@Yoansephiraa 
Yoansephiraa
/
Prak-1_Web-lanjut
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Settings
Prak-1_Web-lanjut/2057051013_Yoan Sephira_PrakWeb3/app/Database/Seeds/Mahasiswa.php /
@Yoansephiraa
Yoansephiraa PrakWebLanjut
Latest commit 90f7a7e 6 days ago
 History
 1 contributor
38 lines (34 sloc)  955 Bytes

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => 'darth',
                'nama' => 'darth@theempire.com',
                'alamat' => 'sukarame',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2057051013',
                'nama' => 'Yoan Sephira',
                'alamat' => 'Palembang',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2057051009',
                'nama' => 'Cahya Nuraini',
                'alamat' => 'Lampung Tengah',
                'created_at' => Time::now(),
            ],
        ];

        foreach ($data_mahasiswa as $data) {
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}