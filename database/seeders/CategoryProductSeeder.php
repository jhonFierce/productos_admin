<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // JSON data as a string for categories and products
        $jsonString = '
        {
            "categories": [
                "electronics",
                "jewelery",
                "men\'s clothing",
                "women\'s clothing"
            ],
            "products": [
                {
                    "id": 1,
                    "title": "Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops",
                    "price": 109.95,
                    "description": "Your perfect pack for everyday use and walks in the forest...",
                    "category": "men\'s clothing",
                    "image": "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
                    "rating": {"rate": 3.9, "count": 120}
                },
                {
                    "id": 2,
                    "title": "Mens Casual Premium Slim Fit T-Shirts",
                    "price": 22.3,
                    "description": "Slim-fitting style, contrast raglan long sleeve, three-button henley placket...",
                    "category": "men\'s clothing",
                    "image": "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg",
                    "rating": {"rate": 4.1, "count": 259}
                },
                {
                    "id": 3,
                    "title": "Mens Cotton Jacket",
                    "price": 55.99,
                    "description": "Great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions...",
                    "category": "men\'s clothing",
                    "image": "https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg",
                    "rating": {"rate": 4.7, "count": 500}
                },
                {
                    "id": 4,
                    "title": "Mens Casual Slim Fit",
                    "price": 15.99,
                    "description": "The color could be slightly different between on the screen and in practice...",
                    "category": "men\'s clothing",
                    "image": "https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg",
                    "rating": {"rate": 2.1, "count": 430}
                },
                {
                    "id": 5,
                    "title": "John Hardy Women\'s Legends Naga Gold & Silver Dragon Station Chain Bracelet",
                    "price": 695,
                    "description": "From our Legends Collection, the Naga was inspired by the mythical water dragon...",
                    "category": "jewelery",
                    "image": "https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg",
                    "rating": {"rate": 4.6, "count": 400}
                },
                {
                    "id": 6,
                    "title": "Solid Gold Petite Micropave ",
                    "price": 168,
                    "description": "Satisfaction Guaranteed. Return or exchange any order within 30 days...",
                    "category": "jewelery",
                    "image": "https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg",
                    "rating": {"rate": 3.9, "count": 70}
                },
                {
                    "id": 7,
                    "title": "White Gold Plated Princess",
                    "price": 9.99,
                    "description": "Classic Created Wedding Engagement Solitaire Diamond Promise Ring for Her...",
                    "category": "jewelery",
                    "image": "https://fakestoreapi.com/img/71YAIFU48IL._AC_UL640_QL65_ML3_.jpg",
                    "rating": {"rate": 3.0, "count": 400}
                },
                {
                    "id": 8,
                    "title": "Pierced Owl Rose Gold Plated Stainless Steel Double",
                    "price": 10.99,
                    "description": "Rose Gold Plated Double Flared Tunnel Plug Earrings. Made of 316L Stainless Steel",
                    "category": "jewelery",
                    "image": "https://fakestoreapi.com/img/51UDEzMJVpL._AC_UL640_QL65_ML3_.jpg",
                    "rating": {"rate": 1.9, "count": 100}
                },
                {
                    "id": 9,
                    "title": "WD 2TB Elements Portable External Hard Drive - USB 3.0",
                    "price": 64,
                    "description": "USB 3.0 and USB 2.0 Compatibility Fast data transfers Improve PC Performance...",
                    "category": "electronics",
                    "image": "https://fakestoreapi.com/img/61IBBVJvSDL._AC_SY879_.jpg",
                    "rating": {"rate": 3.3, "count": 203}
                },
                {
                    "id": 10,
                    "title": "SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s",
                    "price": 109,
                    "description": "Easy upgrade for faster boot up, shutdown, application load and response",
                    "category": "electronics",
                    "image": "https://fakestoreapi.com/img/61U7T1koQqL._AC_SX679_.jpg",
                    "rating": {"rate": 2.9, "count": 470}
                },
                {
                    "id": 11,
                    "title": "Samsung 49-Inch CHG90 144Hz Curved Gaming Monitor",
                    "price": 999.99,
                    "description": "49 INCH SUPER ULTRAWIDE 32:9 CURVED GAMING MONITOR with dual 27 inch screen size...",
                    "category": "electronics",
                    "image": "https://fakestoreapi.com/img/81Zt42ioCgL._AC_SX679_.jpg",
                    "rating": {"rate": 2.2, "count": 140}
                },
                {
                    "id": 12,
                    "title": "BIYLACLESEN Women\'s 3-in-1 Snowboard Jacket Winter Coats",
                    "price": 56.99,
                    "description": "Note:The Jackets is US standard size, Please choose size as your usual wear...",
                    "category": "women\'s clothing",
                    "image": "https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg",
                    "rating": {"rate": 2.6, "count": 235}
                },
                {
                    "id": 13,
                    "title": "Lock and Love Women\'s Removable Hooded Faux Leather Moto Biker Jacket",
                    "price": 29.95,
                    "description": "100% POLYURETHANE (shell) 100% POLYESTER (lining) 75% POLYESTER 25% COTTON (Sweater)",
                    "category": "women\'s clothing",
                    "image": "https://fakestoreapi.com/img/81XH0e8fefL._AC_UY879_.jpg",
                    "rating": {"rate": 2.9, "count": 340}
                },
                {
                    "id": 14,
                    "title": "Rain Jacket Women Windbreaker Striped Climbing Raincoats",
                    "price": 39.99,
                    "description": "Lightweight perfect for trip or casual wear—Long sleeve with hooded, adjustable drawstring waist...",
                    "category": "women\'s clothing",
                    "image": "https://fakestoreapi.com/img/71HblAHs5xL._AC_UY879_-2.jpg",
                    "rating": {"rate": 3.8, "count": 679}
                },
                {
                    "id": 15,
                    "title": "MBJ Women\'s Solid Short Sleeve Boat Neck V ",
                    "price": 9.85,
                    "description": "95% RAYON 5% SPANDEX—Made in USA or Imported—Do Not Bleach...",
                    "category": "women\'s clothing",
                    "image": "https://fakestoreapi.com/img/71z3kpMAYsL._AC_UY879_.jpg",
                    "rating": {"rate": 4.7, "count": 130}
                },
                {
                    "id": 16,
                    "title": "Opna Women\'s Short Sleeve Moisture",
                    "price": 7.95,
                    "description": "100% Polyester, Machine wash, 100% cationic polyester interlock...",
                    "category": "women\'s clothing",
                    "image": "https://fakestoreapi.com/img/51eg55uWmdL._AC_UX679_.jpg",
                    "rating": {"rate": 4.5, "count": 146}
                },
                {
                    "id": 17,
                    "title": "DANVOUY Women T Shirt Casual Cotton Short",
                    "price": 12.99,
                    "description": "95%Cotton, 5%Spandex, Made in USA or Imported, Pull On closure...",
                    "category": "women\'s clothing",
                    "image": "https://fakestoreapi.com/img/61pHAEJ4NML._AC_UX679_.jpg",
                    "rating": {"rate": 3.6, "count": 145}
                },
                {
                    "id": 18,
                    "title": "JBL FLIP 4 - Waterproof Portable Bluetooth Speaker",
                    "price": 79.99,
                    "description": "All-purpose Bluetooth speaker - Take the party everywhere with Flip 4, a portable Bluetooth speaker...",
                    "category": "electronics",
                    "image": "https://fakestoreapi.com/img/71rmt5m4tpL._AC_SX679_.jpg",
                    "rating": {"rate": 4.8, "count": 170}
                },
                {
                    "id": 19,
                    "title": "Anker Portable Charger, PowerCore 20100mAh",
                    "price": 49.99,
                    "description": "High-speed charging technology provides the fastest charge to any phone or tablet...",
                    "category": "electronics",
                    "image": "https://fakestoreapi.com/img/61nU7dAYNHL._AC_SX679_.jpg",
                    "rating": {"rate": 4.9, "count": 250}
                },
                {
                    "id": 20,
                    "title": "Acer Aspire 5 Slim Laptop",
                    "price": 364.99,
                    "description": "15.6 inch Full HD IPS Display, AMD Ryzen 3 3200U, Vega 3 Graphics...",
                    "category": "electronics",
                    "image": "https://fakestoreapi.com/img/81vqrOJdRPL._AC_SX679_.jpg",
                    "rating": {"rate": 3.8, "count": 300}
                }
            ]
        }';

        // Decode the JSON string to PHP objects/arrays
        $data = json_decode($jsonString, true);

        // Insert categories if not present
        foreach ($data['categories'] as $categoryName) {
            Category::firstOrCreate(['name' => $categoryName]);
        }

        // Insert products
        foreach ($data['products'] as $productData) {
            $category = Category::where('name', $productData['category'])->first();

            Product::updateOrCreate(
                ['id' => $productData['id']],
                [
                    'title' => $productData['title'],
                    'price' => $productData['price'],
                    'description' => $productData['description'],
                    'image' => $productData['image'],
                    'category_id' => $category->id,
                    'rating_rate' => $productData['rating']['rate'],
                    'rating_count' => $productData['rating']['count']
                ]
            );
        }
    }
}
