<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return response()->json($invoices);
    }

    public function show(Invoice $invoice)
    {
        return response()->json($invoice);
    }

    public function total()
    {
        $total = Invoice::sum('amount');
        return response()->json(['total' => $total]);
    }
}

