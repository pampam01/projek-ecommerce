<?php 
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua produk dari database
        $product = Product::all();

        // Tampilkan produk ke halaman admin.products.index
        return view('admin.products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name_product' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
            'quantity' => 'required',
        ]);

        // Upload gambar jika ada dan dapatkan path-nya
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            Log::info("Image path: " . $imagePath); // Pastikan gambar berhasil di-upload
        }

        // Simpan data ke database
        $product = new Product();
        $product->name_product = $request->name_product;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $imagePath; // Menyimpan path gambar ke kolom 'image' di database
        $product->quantity = $request->quantity;
        $product->save();

        // Redirect ke halaman produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // Fungsi lainnya tidak perlu diubah untuk saat ini...
}
