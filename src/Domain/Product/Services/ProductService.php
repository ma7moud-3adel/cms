<?php

namespace Domain\Product\Services;

use Domain\Product\DTOs\ProductData;
use Domain\Product\Models\ProductGallery;
use Domain\Product\Models\Product;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ProductService
{
    use ImageUploadTrait;

    public function createProduct(ProductData $data, Request $request): void
    {
        $photoPath = $this->uploadImage($request->file('photo'), 'photo', 'products');

        $product = Product::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'product_category_id' => $data->product_category_id,
            'price' => $data->price,
            'photo' => $photoPath,
        ]);
        $photosPaths = [];
        foreach ($request->file('photos') as $photo) {
            $photosPaths[] = $this->uploadImage($photo, 'photos', 'products');
        }
        // dd($photosPaths);
        foreach ($photosPaths as $photoPath) {
            ProductGallery::create([
                'photos' => $photoPath,
                'product_id' => $product->id,
            ]);
        }
    }
    public function updateProduct(int $id, ProductData $data, Request $request): void
    {
        $product = Product::find($id);
        //        if (!$request->hasFile('photo')){
        //            $request->photo=$product->photo;
        //        }
        $photoPath = $data->photo
            ? $this->uploadImage($request->file('photo'), 'photo', 'products')
            : $product->photo;

        $product->update([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'price' => $data->price,
            'photo' => $photoPath,
        ]);
        //        $photosPaths=$this->updateMultipleImages($request->file('photos'),'photos','products','products');
        //        $productGallery=ProductGallery::where('product_id',$id);
        //        foreach ($photosPaths as $photoPath) {
        ////            dd($images);
        //            $productGallery->update([
        //                'photo' => $photoPath,
        //                'product_id' => $product->id,
        //            ]);
        //        }
    }
    public function deleteProduct(int $id): void
    {
        $product = Product::findOrFail($id);
        $this->deleteImage($product->photo);
        $images = $product->productgallery();
        foreach ($images as $image) {
            $this->deleteImage($image);
        }
        ProductGallery::where('id', $product->id)->delete();
        $product->delete();
    }
}
