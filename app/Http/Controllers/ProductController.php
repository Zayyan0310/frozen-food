<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Data tiruan yang merepresentasikan isi database MySQL nanti
        $products = [
            [
                'name' => 'Daging Sapi Slice',
                'category' => 'Daging',
                'price' => 85000,
                'description' => 'Daging sapi pilihan berkualitas premium dengan ketebalan yang pas untuk Shabu-shabu atau Grill.',
                'weight' => '500 GR',
                'serving_suggestion' => 'Sangat cocok untuk hidangan Shabu-shabu, Yakiniku, atau Teriyaki. Simpan dalam freezer pada suhu -18°C.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBP3sXI2_8yceBeCXKP0pUD2RRLdaTXYmAEa0UAjGcZHMGVU9y_Cc95g9rDLHljkayIquFxzarLekye1eCjr1ZWYrGMTuLHR_GwmJ-xpQKRxqDhMpkBoPNfrzjJgDKO2AzeQutBKbtmHEqF7cA7JgfcE429arT_BBnz_AW1-_GD7N1dprNaktDgFfDoQaLlTU8XvuXk3L9JG26fvu7PD2VL0LqrkR5iLkhQfcrr8HZk0stdporn-faDxWXtO2d1G2dd53wdkl-y5r1N',
                'is_popular' => true
            ],
            [
                'name' => 'Golden Nuggets',
                'category' => 'Snack',
                'price' => 42000,
                'description' => 'Nugget ayam krispi dengan daging dada ayam asli. Tanpa MSG berlebih dan higienis.',
                'weight' => '450 GR',
                'serving_suggestion' => 'Goreng dalam minyak panas selama 3-5 menit hingga cokelat keemasan. Sajikan dengan saus favorit.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBdNWWzuwAVOvWcWeobSUNKJKhTkMT4zNQZMUNqfnxWUR-x2VkFi5ufLUheZAkkLww6NrMd2h0LExGrXgCR9SiAyvmqtgWADiHC08ULBNrM3i2BBU8wB9DChR1DVbt5dtcjkUbxJE-6gw4-Ao2r9URMZSKRGIKptYojAW4-PUxLIOrPzzJv1CYNR28kdd-p5W5hHksQAx73q-xk60JJnin84UmkowBLVdbbp2QhyMtEVr_GHPd8aLpF6so7H56U3VPLRb0Gi4QR9nWK',
                'is_popular' => false
            ],
            [
                'name' => 'Mixed Vegetables',
                'category' => 'Sayuran',
                'price' => 28000,
                'description' => 'Campuran jagung, wortel, dan kacang polong segar yang dibekukan seketika untuk menjaga nutrisi.',
                'weight' => '500 GR',
                'serving_suggestion' => 'Bisa langsung ditumis atau dicampurkan ke dalam salad dan nasi goreng tanpa perlu dicairkan.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD6VpUhihIXMuwyXxjZlOJOkFhQSAn7UMsQw1MrFGPC1d6N2eQWa7dwX8QU71O-uTd5DzhUmmRuf8tkTiTIrYnO4TnYX0RXEHmWddwkwB8TRSzh-tOVOiR7fkpLlcfBoA4z8-83PmRkuMnCXtBTXNqfM1jH0zA2RHTp33oPqnHLz-j2AfMamknYs7T-dGnUz1sW-OhaJVrfrQobyJTEgGe5IP5lS87cNoGQtvGxbqRAyypbQbFICH1U5H6KdXmdz9BuddmMTFc4jvS5',
                'is_popular' => false
            ],
            [
                'name' => 'Dimsum Mentai',
                'category' => 'Food-to-Go',
                'price' => 55000,
                'description' => 'Dimsum ayam premium dengan topping saus mentai gurih. Siap saji hanya dalam 10 menit.',
                'weight' => '8 PCS',
                'serving_suggestion' => 'Kukus selama 10-15 menit atau microwave selama 3-5 menit. Sajikan selagi hangat.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYNqebP3hnyQSJECDH4BHgz1GhsTP3nCA-UwTSpSCWp9Z392rAFUU85vHetHugis-ZHRnwsS47jiYf_zSrEuYi_nYuaUkHFC_xbcsFTVQPB4H9Z0wN8wpKrVPLUvGVpBOpeAVFS5WbGhpvjrj4wch9lmoLGcrq7QKMMrG-2-5YSWqp7ImTtxJf2r4PYDU8fZE-FI4DSswGQ-lGxXjYSsW_kmiCBiS7AgyT6DH1KLcEVBHxcgVIyai49bgxIvsIvTdYx97QkkK0mnc',
                'is_popular' => false
            ]
        ];

        return view('products', compact('products'));
    }
}