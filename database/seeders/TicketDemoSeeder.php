<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class TicketDemoSeeder extends Seeder
{
    public function run(): void
    {
        // Cek apakah sudah ada tickets
        if (Ticket::count() > 0) {
            $this->command->info('Tickets already exist. Skipping...');
            return;
        }

        $admin = User::where('email', 'admin@wikrama.sch.id')->first();
        $staff = User::where('email', 'staff@wikrama.sch.id')->first();
        $budi = User::where('email', 'budi@student.wikrama.sch.id')->first();
        $siti = User::where('email', 'siti@student.wikrama.sch.id')->first();
        $victim = User::where('email', 'victim@test.com')->first();
        $attacker = User::where('email', 'attacker@test.com')->first();

        if (!$budi || !$siti || !$staff || !$victim || !$attacker || !$admin) {
            $this->command->error('Required users not found. Please run DatabaseSeeder first.');
            return;
        }

        // Tickets untuk Authorization Lab
        Ticket::create([
            'user_id' => $budi->id,
            'assigned_to' => $staff->id,
            'title' => 'Tidak bisa login ke e-learning',
            'description' => 'Saya sudah coba reset password tapi tetap tidak bisa masuk ke sistem e-learning.',
            'priority' => 'high',
            'status' => 'in_progress',
        ]);

        Ticket::create([
            'user_id' => $budi->id,
            'assigned_to' => null,
            'title' => 'Request akses lab komputer',
            'description' => 'Mohon dibukakan akses ke lab komputer untuk mengerjakan tugas praktikum.',
            'priority' => 'medium',
            'status' => 'open',
        ]);

        Ticket::create([
            'user_id' => $siti->id,
            'assigned_to' => $staff->id,
            'title' => 'Printer di perpustakaan error',
            'description' => 'Printer di perpustakaan mengeluarkan kertas kosong. Sudah dicoba restart tapi masih sama.',
            'priority' => 'medium',
            'status' => 'in_progress',
        ]);

        Ticket::create([
            'user_id' => $siti->id,
            'assigned_to' => null,
            'title' => 'WiFi lambat di kelas XII RPL',
            'description' => 'Koneksi WiFi sangat lambat di area kelas XII RPL, sulit untuk mengakses materi online.',
            'priority' => 'low',
            'status' => 'open',
        ]);

        Ticket::create([
            'user_id' => $budi->id,
            'assigned_to' => $staff->id,
            'title' => 'Password email terlupa',
            'description' => 'Lupa password email sekolah.',
            'priority' => 'high',
            'status' => 'closed',
        ]);

        // Tickets untuk BAC/IDOR Lab
        Ticket::create([
            'user_id' => $victim->id,
            'title' => '[CONFIDENTIAL] Laporan Keuangan Q1',
            'description' => 'Data keuangan rahasia perusahaan. Total pendapatan: Rp 500.000.000. Data ini SEHARUSNYA hanya bisa dilihat oleh pemiliknya!',
            'status' => 'open',
            'priority' => 'high',
        ]);

        Ticket::create([
            'user_id' => $victim->id,
            'title' => '[PRIVATE] Data Pribadi Karyawan',
            'description' => 'NIK: 3201xxxxx, Alamat: Jl. Rahasia No. 123. IDOR vulnerability membuat data ini bocor!',
            'status' => 'in_progress',
            'priority' => 'high',
        ]);

        Ticket::create([
            'user_id' => $attacker->id,
            'title' => 'Tiket Biasa Attacker',
            'description' => 'Ini adalah tiket normal milik attacker. Attacker akan mencoba mengakses tiket victim dengan mengganti ID!',
            'status' => 'open',
            'priority' => 'low',
        ]);

        Ticket::create([
            'user_id' => $attacker->id,
            'title' => 'Permintaan Support',
            'description' => 'Tiket support biasa dari attacker.',
            'status' => 'open',
            'priority' => 'medium',
        ]);

        Ticket::create([
            'user_id' => $admin->id,
            'title' => '[ADMIN] System Maintenance',
            'description' => 'Jadwal maintenance server. Admin bisa melihat semua tiket.',
            'status' => 'open',
            'priority' => 'medium',
        ]);

        $this->command->info('✓ Created 10 demo tickets');
    }
}
