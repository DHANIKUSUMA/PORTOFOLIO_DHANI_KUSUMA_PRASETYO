<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Proyek
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');

// Halaman Resume
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');

// Halaman Kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
