<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\ProductCategoryRequest;
use Domain\Product\DataTables\ProductCategoryDataTable;
use Domain\Product\DTOs\ProductCategoryData;
use Domain\Product\Models\ProductCategory;
use Domain\Product\Services\ProductCategoryService;

class ProductCategoryController extends Controller
{
    public function __construct (private ProductCategoryService $service)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories=ProductCategory::all();
        return view('dashboard.product.product_category.index',compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCategoryRequest $request)
    {
        $data = ProductCategoryData::from($request->validated());
        $this->service->createProductCategory($data,$request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }
    public function indexDatatable(ProductCategoryDataTable $dataTable)
    {
        return $dataTable->render('dashboard.product.product_category.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productCategory=ProductCategory::findOrFail($id);
        return view('dashboard.product.product_category.edit',compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,ProductCategoryRequest $request)
    {
        $data=ProductCategoryData::from($request->validated());
        $this->service->updateProductCategory($id,$data,$request);
        return redirect()->route('product-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteProductCategory($id);
        return response()->json([
            'status'=>'success',
            'message'=>'Product category deleted successfully'
        ],200);
    }
}
