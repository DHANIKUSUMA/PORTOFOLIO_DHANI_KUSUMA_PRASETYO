<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Tampilkan formulir dan informasi kontak.
     */
    public function index(): View
    {
        return view('pages.contact', [
            'email' => 'dhanikusuma220@gmail.com',
            'location' => 'Bangkalan, Jawa Timur, Indonesia',
            'linkedin' => 'https://linkedin.com/in/dhanikusumaprasetyo',
            'github' => 'https://github.com/dhanikp',
        ]);
    }

    /**
     * Simpan pesan dari formulir kontak.
     */
    public function send(Request $request): RedirectResponse
    {
        // Proteksi spam proporsional dengan honeypot field
        if ($request->filled('company_catch')) {
            // Jika bot mengisi field tersembunyi ini, langsung redirect seolah sukses tanpa simpan
            return redirect()->route('contact.index')
                ->with('success', 'Pesan Anda berhasil diterima.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:rfc,dns', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ], [
            'name.required' => 'Mohon cantumkan nama lengkap Anda.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format alamat email tidak valid.',
            'subject.required' => 'Subjek pesan tidak boleh kosong.',
            'message.required' => 'Isi pesan tidak boleh kosong.',
            'message.min' => 'Pesan minimal terdiri dari 10 karakter.',
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact.index')
            ->with('success', 'Terima kasih, pesan Anda berhasil dikirim! Dhani akan segera membaca dan merespons via email.');
    }
}
