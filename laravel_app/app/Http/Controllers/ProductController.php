<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // getProduct
    public function getProduct()
    {
        // selectionner tous les éléments de cette table et obtenir une réponse de type json
        // rendre le status 200 pour dire que tout s'est bien passé
        return response()->json(Product::all(), 200);
    }
    // getProduct by ID
    public function getProductById($id)
    {
        // récupérer les données d'un produit en précisant son id
        $product = Product::find($id);
        // s'il n'y a pas de produit
        if (is_null($product)) {
            // retourner un message d'erreur
            return response()->json(['message' => 'Produit introuvable'], 404);
        }
        return response()->json(Product::find($id), 200);
    }
    // addProduct
    public function addProduct(Request $request)
    {
        // ajouter un nouveau produit
        $product = Product::create($request->all());
        return response($product, 201);
    }
    // updateProduct
    public function updateProduct(Request $request, $id)
    {
        // mise à jour d'un produit
        $product = Product::find($id);
        if (is_null($product)) {
            // retourner un message d'erreur
            return response()->json(['message' => 'Produit introuvable'], 404);
        }
        $product->update($request->all());
        return response($product, 200);
    }
    // deleteProduct
    public function deleteProduct(Request $request, $id)
    {
        // mise à jour d'un produit
        $product = Product::find($id);
        if (is_null($product)) {
            // retourner un message d'erreur
            return response()->json(['message' => 'Produit introuvable'], 404);
        }
        $product->delete();
        return response(null, 204);
    }
}
