<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAll() {
        return response()->json(Product::all());
    }

    public function getById($id) {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|string'
            // Aquí no se gestiona 'rating_rate' ni 'rating_count' (no validar aquí)
        ]);
        $product = Product::create($data);
        return response()->json($product, 201);
    }


    public function update(Request $request, $id) {
        // Buscar el producto por ID
        $product = Product::findOrFail($id);

        // Validar los datos de entrada
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'price' => 'sometimes|required|numeric',
            'image' => 'sometimes|required|string',
            'rating_rate' => 'nullable|numeric|between:0,5',
            'rating_count' => 'nullable|integer|min:0',
        ]);

        // Actualizar el producto con los datos validados
        $product->update($validatedData);

        // Retornar respuesta con el producto actualizado
        return response()->json($product, 200);
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json([
            'id' => $id,
            'message' => 'Product deleted'
        ]);
    }
    

}
