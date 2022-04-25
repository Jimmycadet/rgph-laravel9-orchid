<?php

use App\Http\Livewire\Page2TestComponent;
use App\Http\Livewire\PageAProposComponent;
use App\Http\Livewire\PageAProposVComponent;
use App\Http\Livewire\PageCadreLegalComponent;
use App\Http\Livewire\PageConfidentialite;
use App\Http\Livewire\PageContactComponent;
use App\Http\Livewire\PageIndexComponent;
use App\Http\Livewire\PageQuoiPorteRecensement;
use App\Http\Livewire\PageRecensementPhase;
use App\Http\Livewire\PageStatEconomiqueDemograpgique;
use App\Http\Livewire\PageStrucOrgComponent;
use App\Http\Livewire\PageTestComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', PageIndexComponent::class)
    ->name('pages.index');

Route::get('/struc-org', PageStrucOrgComponent::class)
    ->name('pages.struc-org');

Route::get('/cadre-legal', PageCadreLegalComponent::class)
    ->name('pages.cadre-legal');


Route::get('/a-propos', PageAProposComponent::class)
    ->name('pages.a-propos');

Route::get('/a-propos-5em-rgph', PageAProposVComponent::class)
    ->name('pages.a-propos-v');

Route::get('/contact', PageContactComponent::class)
    ->name('pages.contact');

Route::get('/confidentialite', PageConfidentialite::class)
    ->name('pages.confidentialite');

Route::get('/sur-quoi-porte-le-recensement', PageQuoiPorteRecensement::class)
    ->name('pages.recensement');

Route::get('/les-phases-du-recensement', PageRecensementPhase::class)
    ->name('pages.recensement-phases');

Route::get('/statistiques-economiques-et-demographiques', PageStatEconomiqueDemograpgique::class)
    ->name('pages.stat-econo-demo');

//////////////////////////////////

Route::get('/page-test', PageTestComponent::class)
    ->name('page-test');
Route::get('/page2-test', PageTestComponent::class)
    ->name('page2-test');
