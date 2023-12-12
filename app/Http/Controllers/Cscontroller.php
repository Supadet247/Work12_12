<?php
namespace App\Http\Controllers;
use Inertia\Inertia;

class CsController extends Controller
{
public function index(){
    //return “Index”;
    return Inertia::render('Staff/index');
    }
 public function show(){
    return 'Show';
    }
}
