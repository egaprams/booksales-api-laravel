<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['user', 'book'])->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $transactions
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'book_id' => 'required|exists:books,id',
        ]);

        $uniqueOrderNumber = 'ORD-' . strtoupper(uniqid()); ;
        
        $user = auth('api')->user();
        if (!$user) {
            return response()->json([
                "success" => false,
                "message" => "unnauthorized"
            ], 401);
        }
        
        $book = Book::find($request->book_id);
        if (!$book) {
            return response()->json([
                "success" => false,
                "message" => "Book not found"
            ], 404);
        }
        if ($book->stock <= $request->quantity){
            return response()->json([
                "success" => false,
                "message" => "Book is out of stock"
            ], 400);
        }

        $book->stock -= $request->quantity;
        $book->save();

        $totalAmount = $book->price * $request->quantity;

        $transaction = Transaction::create([
            'order_number' => $uniqueOrderNumber,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'amount' => $totalAmount
        ]);

        return response()->json([
            "success" => true,
            "message" => "Transaction created successfully",
            "data" => $transaction
        ], 201);
    }
}
