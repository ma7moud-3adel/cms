<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\ProductRequest;
use Domain\Product\DataTables\ProductDataTable;
use Domain\Product\DTOs\ProductData;
use Domain\Product\Models\Product;
use Domain\Product\Models\ProductCategory;
use Domain\Product\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(private ProductService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        $productCategories=ProductCategory::all();
        return view('dashboard.product.product.index',compact('products','productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategories=ProductCategory::all();
        return view('dashboard.product.product.create',compact('productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data=ProductData::from($request->validated());
        $this->service->createProduct($data,$request);
        return redirect()->route('product.index');
    }
    public function indexDatatable(ProductDataTable $dataTable)
    {
        return $dataTable->render('dashboard.product.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=Product::findOrFail($id);
        $productCategories=ProductCategory::all();
        return view('dashboard.product.product.edit',compact('product','productCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, ProductRequest $request)
    {
        $data=ProductData::fromProduct($request->validated());
        $this->service->updateProduct($id,$data,$request);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteProduct($id);
        return response()->json([
            'status'=>'success',
            'message'=>'Product deleted successfully'
        ],200);    }
}
