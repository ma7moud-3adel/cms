<?php

namespace Domain\Product\Services;

use Domain\Product\DTOs\ProductCategoryData;
use Domain\Product\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryService
{
    public function createProductCategory(ProductCategoryData $data, Request $request): void
    {
        ProductCategory::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
        ]);

    }

    public function updateProductCategory(int $id, ProductCategoryData $data, Request $request): void
    {
        $productCategory = ProductCategory::find($id);
        $productCategory->update([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar
        ]);
    }

    public function deleteProductCategory(int $id): void
    {
        $productCategory=ProductCategory::findOrFail($id);
        $productCategory->delete();
    }

}
