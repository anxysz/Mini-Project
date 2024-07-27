<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        $categories = Category::all();
        $totalBooks = Book::count();
        return view('admin.book', compact('books', 'categories', 'totalBooks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'id_kategori' => 'required|exists:categories,id',
            'penulis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $book = Book::create([
            'judul' => $request->judul,
            'id_kategori' => $request->id_kategori,
            'penulis' => $request->penulis,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,
        ]);

        return response()->json($book->load('category'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'id_kategori' => 'required|exists:categories,id',
            'penulis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($book->image) {
                Storage::disk('public')->delete($book->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $book->image = $imagePath;
        }

        $book->judul = $request->judul;
        $book->id_kategori = $request->id_kategori;
        $book->penulis = $request->penulis;
        $book->deskripsi = $request->deskripsi;
        $book->save();

        return response()->json($book->load('category'));
    }

    public function destroy(Book $book)
    {
        if ($book->image) {
            Storage::disk('public')->delete($book->image);
        }
        $book->delete();

        return response()->json(['success' => true]);
    }
}
