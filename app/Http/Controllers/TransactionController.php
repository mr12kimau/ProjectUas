<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // Dapatkan semua transaksi dengan relasi 'customer' dan 'employee'
          $transactions = Transaction::with(['customer', 'employee'])->get();

          // Kirim data transaksi ke view
          // Assumsikan view Anda bernama 'transactions.index'
          return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::transaction(function () use ($request) {
            $transaction = Transaction::create([
                'customer_id' => $request->customer_id,
                'employee_id' => $request->employee_id,
                'total_price' => $request->total_price,
                'payment_status' => $request->payment_status,
                // dan seterusnya sesuai dengan input dari request
            ]);

            foreach ($request->products as $product) { // Anggap $request->products berisi array detail produk
                $transactionDetail = new TransactionDetail([
                    'product_id' => $product['id'],
                    'quantity' => $product['quantity'],
                    // dan seterusnya sesuai dengan struktur dari array produk
                ]);
                $transaction->details()->save($transactionDetail);

                // Update stok produk
                $productModel = Product::find($product['id']);
                $productModel->decrement('quantity', $product['quantity']);
            }

        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
