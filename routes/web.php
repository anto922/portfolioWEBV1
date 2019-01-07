<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 *
 */
Auth::routes();

//PORTFOLIO PRINCIPAL

Route::get('/', 'PortfolioController@index');
Route::post('/sendMail', 'MailController@send');

// FIN PORTFOLIO PRINCIPAL

// Routes Admin
Route::get('/AdminPanel/Dashboard', 'Admin\DashboardController@show')->middleware([
    'auth',
    'admin',
]);

//experiencia
Route::get('/AdminPanel/Experiencia', 'Admin\ExperienceController@index')->middleware([
    'auth',
    'admin',
]);
Route::get('/AdminPanel/AltaExperiencia', 'Admin\ExperienceController@Create')->middleware([
    'auth',
    'admin',
]);
Route::get('getCities/{province_id}', 'Admin\ExperienceController@getCities')->middleware([
    'auth',
    'admin',
])->name('experience.cities');
Route::get('/AdminPanel/Habilidades', 'Admin\SkillsController@index')->middleware([
    'auth',
    'admin',
]);
Route::get('/AdminPanel/Experiencia/{experience}/edit', 'Admin\ExperienceController@edit')->middleware([
    'auth',
    'admin',
])->name('experience.edit');
Route::get('/AdminPanel/Experiencia/{experience}', 'Admin\ExperienceController@show')->middleware([
    'auth',
    'admin',
])->name('experience.show');
Route::post('AdminPanel/StoreExperience', 'Admin\ExperienceController@store')->middleware([
    'auth',
    'admin',
]);
Route::put('/AdminPanel/Experiencia/{experience}', 'Admin\ExperienceController@update')->middleware([
    'auth',
    'admin',
]);
Route::delete('/AdminPanel/Experiencia/{experience}', 'Admin\ExperienceController@destroy')->name('experience.destroy');
///finexperiencia//////

///habilidades

Route::get('/AdminPanel/Habilidades', 'Admin\SkillsController@index')->middleware([
    'auth',
    'admin',
]);
Route::get('/AdminPanel/AltaHabilidad', 'Admin\SkillsController@Create')->middleware([
    'auth',
    'admin',
]);
Route::post('AdminPanel/StoreSkill', 'Admin\SkillsController@Store')->middleware([
    'auth',
    'admin',
]);
Route::get('/AdminPanel/Habilidad/{skill}/edit', 'Admin\SkillsController@edit')->middleware([
    'auth',
    'admin',
])->name('skill.edit');

Route::put('/AdminPanel/Habilidad/{skill}', 'Admin\SkillsController@update')->middleware([
    'auth',
    'admin',
]);

Route::delete('/AdminPanel/Habilidad/{skill}', 'Admin\SkillsController@destroy')->name('skill.destroy');

///fin habilidad/////

//estudios

Route::get('/AdminPanel/Estudios', 'Admin\StudiesController@index')->middleware([
    'auth',
    'admin',
]);

Route::get('/AdminPanel/Estudios/{studie}/edit', 'Admin\StudiesController@edit')->middleware([
    'auth',
    'admin',
])->name('studie.edit');

Route::get('/AdminPanel/Estudios/{estudies}', 'Admin\StudiesController@show')->middleware([
    'auth',
    'admin',
])->name('studie.show');

Route::get('/AdminPanel/AltaEstudio', 'Admin\StudiesController@Create')->middleware([
    'auth',
    'admin',
]);

Route::put('/AdminPanel/Estudios/{studie}', 'Admin\StudiesController@update')->middleware([
    'auth',
    'admin',
]);

Route::delete('/AdminPanel/Estudio/{studie}', 'Admin\StudiesController@destroy')->name('studie.destroy');

Route::post('AdminPanel/StoreStudie', 'Admin\StudiesController@Store')->middleware([
    'auth',
    'admin',
]);

//fin estudios////

// trabajos

Route::get('/AdminPanel/Trabajos', 'Admin\WorksController@index')->middleware([
    'auth',
    'admin',
]);

Route::get('/AdminPanel/Trabajos/{work}/edit', 'Admin\WorksController@edit')->middleware([
    'auth',
    'admin',
])->name('work.edit');

Route::get('/AdminPanel/AltaTrabajo', 'Admin\WorksController@Create')->middleware([
    'auth',
    'admin',
]);

Route::put('/AdminPanel/Trabajos/{work}', 'Admin\WorksController@update')->middleware([
    'auth',
    'admin',
]);

Route::delete('/AdminPanel/Trabajos/{work}', 'Admin\WorksController@destroy')->name('work.destroy');

Route::post('AdminPanel/StoreWork', 'Admin\WorksController@Store')->middleware([
    'auth',
    'admin',
]);

//fin trabajos

//Perfil
Route::get('/AdminPanel/Perfil/edit', 'Admin\AdminController@edit')->middleware([
    'auth',
    'admin',
])->name('perfil.edit');

Route::put('/AdminPanel/Perfil/{admin}', 'Admin\AdminController@update')->middleware([
    'auth',
    'admin',
]);
//fin perfil
// Routes Admin End

// Login routes
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
