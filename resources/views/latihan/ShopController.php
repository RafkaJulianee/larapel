<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        // In a real application, fetch from DB: $products = Product::all();
        // Using dummy data for immediate demonstration of the design:
        $products = [
            [
                'id' => 1,
                'name' => 'Modern Lounge Chair',
                'price' => 199.00,
                'description' => 'Ergonomic design with premium fabric finish.',
                'image_url' => 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'id' => 2,
                'name' => 'Minimalist Desk Lamp',
                'price' => 45.50,
                'description' => 'Adjustable brightness with a sleek metal body.',
                'image_url' => 'https://images.unsplash.com/photo-1507473888900-52e1adad5420?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'id' => 3,
                'name' => 'Ceramic Flower Vase',
                'price' => 29.99,
                'description' => 'Handcrafted ceramic vase, perfect for any room.',
                'image_url' => 'https://images.unsplash.com/photo-1581783342308-f792ca11dfdd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            ],
            [
                'id' => 4,
                'name' => 'Analog Wall Clock',
                'price' => 89.00,
                'description' => 'Timeless design with silent movement mechanism.',
                'image_url' => 'https://images.unsplash.com/photo-1563861826100-9cb868fdbe1c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            ],
        ];

        // Convert array to object for consistency with Eloquent
        $products = json_decode(json_encode($products));

        return view('shop.index', compact('products'));
    }
}