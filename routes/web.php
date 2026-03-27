<?php

declare(strict_types=1);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomeController::class)->name('home');

Route::get('/projects', function () {
    return Inertia::render('Projects');
})->name('projects');

Route::get('/blog', function () {
    return Inertia::render('Blog');
})->name('blog');

Route::get('/resume', function () {
    return Inertia::render('Resume', [
        'experience' => [
            [
                'company' => 'HelloContainer',
                'role' => 'Senior Developer / Technical Lead',
                'period' => '2024 - present',
                'description' => 'Lead technical improvements across the codebase and development workflows, with a strong focus on scalability and maintainability. Spearheading a large-scale project to eliminate technical debt, including setting up and managing a new development team in Rotterdam. Drive the adoption of modern technologies and mentor developers to strengthen team capabilities.',
            ],
            [
                'company' => 'Zes Goes',
                'role' => 'Senior Developer / Technical Lead',
                'period' => '2019 - 2024',
                'description' => 'Led a dedicated development team focused on supporting the internal technical service department handling repairs for major brands such as Apple, LG and Sony. Directed the full rewrite of a legacy application into a modern Symfony-based system with high standards. Oversaw architectural decisions, code quality, and deployment strategies. Continued to maintain and develop the critical Sony integration, for which I remained the sole developer due to its procedural structure and complexity.',
            ],
            [
                'company' => 'Zes Goes',
                'role' => 'PHP Developer',
                'period' => '2012 - 2019',
                'description' => 'Contributed to the migration of a legacy procedural PHP application to a modern system built with Symfony. Helped develop and maintain an after-sales platform used by major clients such as MediaMarkt, Bol.com, and Wehkamp. Responsible for building and maintaining a key integration with Sony, supporting internal technical service operations. Contributed to ongoing performance improvements and feature development.',
            ],
        ],
        'education' => [
            [
                'school' => 'University of Applied Sciences',
                'degree' => 'Bachelor of Science in ICT',
                'period' => '2014 - 2018',
            ],
        ],
    ]);
})->name('resume');

Route::get('dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
