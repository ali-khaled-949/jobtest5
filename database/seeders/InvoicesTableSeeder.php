<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use App\Models\User;

class InvoicesTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // assuming there's at least one user in your db
        Invoice::create([
            'vendor_name' => 'Vendor Inc.',
            'amount' => 199.99,
            'due_date' => now()->addDays(30),
            'description' => 'Services rendered',
            'user_id' => $user->id,
            'paid' => false,
        ]);

        // More invoices can be added similarly
    }
}

