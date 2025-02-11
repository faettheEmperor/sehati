<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        
        $user = User::find(Auth::id());
        $shops = $user->shops()->orderBy('created_at', 'desc')->get();
        
        // if(request('search')) {
        //     $shops->where('shop_name', 'like', '%' . request('search') . '%');
        // }

        // $shops = $shops->paginate(5);

        return view('tagging.index', [
            'shops' => $shops,
        ]);
    }


    public function update(Request $request)
    {
        $messages = [
            'shop_name.required' => 'Isikan nama usaha',
            'shop_name.min' => 'Isian minimal adalah :min karakter.',
            'shop_name.max' => 'Isian maksimal adalah :max karakter.',
            'shop_description.required' => 'Isikan nama usaha',
            'shop_description.min' => 'Isian minimal adalah :min karakter.',
            'shop_description.max' => 'Isian maksimal adalah :max karakter.',
            'shop_address.required' => 'Isikan alamat usaha',
            'shop_address.min' => 'Isian minimal adalah :min karakter.',
            'shop_address.max' => 'Isian maksimal adalah :max karakter.',
        ];

        $validated = $request->validate([
            'shop_name' => 'required|min:5|max:124',
            'shop_description' => 'required|min:10|max:255',
            'shop_address' => 'required|min:10|max:255',
        ], $messages);

        $shop = Shop::findOrFail($request->shop_id);

        // Mengupdate data yang diperbolehkan
        $shop->shop_name = $validated['shop_name'];
        $shop->shop_description = $validated['shop_description'];
        $shop->shop_address = $validated['shop_address'];
        $shop->save();

        return redirect()->route('tagging.index')->with(['status' => 'Tagging berhasil di Perbaharui!']);
    }

    public function destroy($id)
    {
        // Mencari data shop berdasarkan ID yang diteruskan melalui URL
        $shop = Shop::findOrFail($id);

        // Menghapus data shop
        $shop->delete();

        // Mengalihkan ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('tagging.index')->with('status', 'Tagging berhasil dihapus!');
    }

    public function create()
    {
        return view('tagging.create');
    }

    public function store(Request $request)
    {
        $userId = Auth::id();

        $messages = [
            'shop_name.required' => 'Isikan nama usaha',
            'shope_name.min' => 'Isian minimal adalah :min karakter.',
            'shope_name.max' => 'Isian maksimal adalah :max karakter.',
            'shop_description.required' => 'Isikan nama usaha',
            'shop_description.min' => 'Isian minimal adalah :min karakter.',
            'shop_description.max' => 'Isian maksimal adalah :max karakter.',
            'shop_address.required' => 'Isikan alamat usaha',
            'shop_address.min' => 'Isian minimal adalah :min karakter.',
            'shop_address.max' => 'Isian maksimal adalah :max karakter.',
        ];

        $validated = $request->validate([
            'shop_name' => 'required|min:5|max:124',
            'shop_description' => 'required|min:10|max:255',
            'shop_address' => 'required|min:10|max:255',
            'latitude' => 'required',
            'longitude' => 'required',
        ], $messages);

        Shop::create([
            'shop_name' => $validated['shop_name'],
            'shop_description' => $validated['shop_description'],
            'shop_address' => $validated['shop_address'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
            'user_id' => $userId,
        ]);

        return redirect()->route('tagging.index')->with(['status' => 'Tagging usaha berhasil!']);
    }
}
