<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ResumeController extends Controller
{
    /**
     * Tampilkan halaman resume terstruktur.
     */
    public function index(): View
    {
        $experiences = Experience::orderBy('sort_order', 'asc')->get();

        $education = [
            'institution' => 'Universitas Trunojoyo Madura (UTM)',
            'degree' => 'Sarjana (S1) Sistem Informasi',
            'period' => '2022 — Sekarang (Mahasiswa Aktif)',
            'location' => 'Bangkalan, Jawa Timur',
            'relevant_courses' => [
                'Rekayasa Perangkat Lunak',
                'Pemrograman Web & Framework',
                'Desain Antarmuka & Pengalaman Pengguna (UI/UX)',
                'Basis Data & Sistem Basis Data Lanjut',
                'Analisis & Perancangan Sistem Informasi',
                'Manajemen Proyek Teknologi Informasi',
                'Interaksi Manusia & Komputer (HCI)',
            ],
        ];

        $skills = [
            'web_dev' => ['Laravel', 'PHP', 'MySQL', 'RESTful API', 'Tailwind CSS', 'Bootstrap', 'JavaScript', 'Git / GitHub'],
            'ui_ux' => ['Figma', 'Wireframing', 'Interactive Prototyping', 'Design Systems', 'Usability Testing (Maze)', 'SUS Methodology', 'User Journey & Personas'],
            'tools_workflow' => ['Visual Studio Code', 'Supabase', 'Vercel', 'Agile Scrum', 'Notion', 'Postman'],
        ];

        $achievements = [
            [
                'title' => 'Skor SUS 83,0 (Kategori Excellent) — Proyek UI/UX DEKAT',
                'year' => '2024',
                'description' => 'Mencapai skor System Usability Scale 83,0 dalam pengujian kelayakan langsung bersama 5 partisipan dan 8 skenario pengujian di platform Maze.',
            ],
            [
                'title' => 'Asisten Praktikum & Administrator Laboratorium Sistem Informasi UTM',
                'year' => '2023 — Sekarang',
                'description' => 'Terpilih mengampu mata kuliah praktikum pemrograman dan merawat infrastruktur laboratorium komputer universitas.',
            ],
            [
                'title' => 'Inisiator & Pengembang Sistem Digitalisasi PrintLab',
                'year' => '2024',
                'description' => 'Mendigitalisasi layanan cetak operasional laboratorium komputer kampus untuk puluhan transaksi harian.',
            ],
        ];

        return view('pages.resume', [
            'experiences' => $experiences,
            'education' => $education,
            'skills' => $skills,
            'achievements' => $achievements,
        ]);
    }

    /**
     * Unduh berkas CV PDF.
     */
    public function download(): BinaryFileResponse|Response
    {
        $cvPath = public_path('assets/cv/CV_Dhani_Kusuma_Prasetyo.pdf');

        if (File::exists($cvPath)) {
            return response()->download($cvPath, 'CV_Dhani_Kusuma_Prasetyo.pdf', [
                'Content-Type' => 'application/pdf',
            ]);
        }

        // Jika file belum diunggah secara fisik, sajikan respon informatif
        return response(
            "Berkas CV fisik sedang dalam persiapan final pembaruan. Silakan hubungi langsung melalui email dhanikusuma220@gmail.com atau tombol kontak di website.",
            200,
            ['Content-Type' => 'text/plain; charset=UTF-8']
        );
    }
}
