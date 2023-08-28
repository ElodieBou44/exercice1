<?php

use Illuminate\Support\Facades\Route;
// Chemin vers les contrôleurs
use App\Http\Controllers\NavController; 
use App\Http\Controllers\FormController; 

// Route pour lorsque rien ne vient après le "/" 
Route::get('/', function () {
    return view('index');
});

// Route pour la page d'accueil
Route::get('/home', [NavController::class, 'index']);

// Route pour la page de produits 
Route::get('/products', [NavController::class, 'products']);

// Route pour la page d'à propos 
Route::get('/about', [NavController::class, 'about']);

// Route pour la page de contact 
Route::get('/contact', [NavController::class, 'contact']);

// Route pour le formulaire de la page de contact
Route::post('/contact', [FormController::class, 'contactForm']);