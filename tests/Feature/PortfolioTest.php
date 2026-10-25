<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Jalankan seed data secara otomatis untuk test suite.
     */
    protected bool $seed = true;

    public function test_homepage_loads_successfully_with_required_elements(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Dhani Kusuma');
        $response->assertSee('Prasetyo');
        $response->assertSee('Web Developer yang memahami proses pengembangan produk digital');
        $response->assertSee('Lihat Proyek Pilihan');
        $response->assertSee('Unduh CV');
        $response->assertSee('Hubungi Saya');
    }

    public function test_projects_page_loads_with_categories_and_projects(): void
    {
        $response = $this->get('/projects');

        $response->assertStatus(200);
        $response->assertSee('Web Development');
        $response->assertSee('UI/UX Design');
        $response->assertSee('Sistem Informasi Pemantauan Progres Skripsi');
        $response->assertSee('PrintLab');
        $response->assertSee('DEKAT');
    }

    public function test_project_category_filter_works(): void
    {
        $response = $this->get('/projects?category=ui-ux-design');

        $response->assertStatus(200);
        $response->assertSee('DEKAT');
        $response->assertSee('APP KEY LAB');
    }

    public function test_project_detail_page_loads_with_case_study_sections(): void
    {
        $project = Project::where('slug', 'sistem-informasi-pemantauan-progres-skripsi')->first();
        $this->assertNotNull($project, 'Featured project 1 should exist');

        $response = $this->get('/projects/' . $project->slug);

        $response->assertStatus(200);
        $response->assertSee($project->title);
        $response->assertSee('Tantangan yang Dihadapi');
        $response->assertSee('Tujuan &amp; Solusi Sistem', false);
        $response->assertSee('Kontribusi Pribadi Terverifikasi');
        $response->assertSee('Proses Eksekusi Proyek');
        $response->assertSee('Validasi Terukur &amp; Dampak', false);
    }

    public function test_resume_page_loads_with_experience_and_education(): void
    {
        $response = $this->get('/resume');

        $response->assertStatus(200);
        $response->assertSee('Universitas Trunojoyo Madura');
        $response->assertSee('Sarjana (S1) Sistem Informasi');
        $response->assertSee('Asisten Praktikum, Lab Administrator &amp; Kominfo', false);
        $response->assertSee('UTM TV');
        $response->assertSee('HIMASI');
        $response->assertSee('Skor SUS 83,0');
    }

    public function test_resume_download_endpoint_returns_pdf(): void
    {
        $response = $this->get('/resume/download');

        $response->assertStatus(200);
        $this->assertStringContainsString('pdf', $response->headers->get('content-type'));
    }

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('dhanikusuma220@gmail.com');
        $response->assertSee('linkedin.com/in/dhanikusumaprasetyo');
        $response->assertSee('github.com/dhanikp');
    }

    public function test_contact_form_submission_stores_message_and_redirects(): void
    {
        $formData = [
            'name' => 'Recruiter Team',
            'email' => 'recruiter@techcompany.com',
            'subject' => 'Undangan Wawancara Web Developer',
            'message' => 'Halo Dhani, kami tertarik dengan portofolio Anda dan ingin mendiskusikan peluang kerja lebih lanjut.',
        ];

        $response = $this->post('/contact', $formData);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'email' => 'recruiter@techcompany.com',
            'subject' => 'Undangan Wawancara Web Developer',
        ]);
    }

    public function test_contact_form_honeypot_blocks_spam(): void
    {
        $botData = [
            'name' => 'Spam Bot',
            'email' => 'bot@spammer.com',
            'subject' => 'Buy Crypto',
            'message' => 'Spam text message here for bot testing.',
            'company_catch' => 'I am a bot filling hidden fields',
        ];

        $response = $this->post('/contact', $botData);

        $response->assertRedirect('/contact');
        $this->assertDatabaseMissing('contact_messages', [
            'email' => 'bot@spammer.com',
        ]);
    }
}
