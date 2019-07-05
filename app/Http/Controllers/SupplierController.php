<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;


class SupplierController extends Controller
{
    public function index()
    		{
       			$suppliers = Supplier::orderBy('created_at', 'DESC')->paginate(10);
        		return view('suppliers.index', compact('suppliers'));
    		}
}
