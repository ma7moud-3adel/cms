<?php

namespace Domain\Product\DTOs;

use Domain\Product\Models\Product;
use Spatie\LaravelData\Data;

class ProductData extends Data
{
    public function __construct(
        public string  $name_en,
        public string  $name_ar,
        public string  $description_en,
        public string  $description_ar,
        public int     $product_category_id,
        public float   $price,
        public string $photo,
        public array   $photos,
        public ?string $meta_name_en,
        public ?string $meta_name_ar,
        public ?string $meta_description_en,
        public ?string $meta_description_ar,
        public ?string $meta_keywords_en,
        public ?string $meta_keywords_ar,
        public ?string $slug,
    ) {}

    /**
     * Create a ProductData instance from a Product model.
     */
    public static function fromProduct(Product|array $product): self
    {
        if (is_array($product)) {
            return new self(
                name_en: $product['name_en'],
                name_ar: $product['name_ar'],
                description_en: $product['description_en'],
                description_ar: $product['description_ar'],
                product_category_id: $product['product_category_id'],
                price: $product['price'],
                photos: $product['photos'] ?? [], // Default to an empty array if not set
                photo: $product['photo'] ?? null,
                meta_name_en: $product['meta_name_en'] ?? null,
                meta_name_ar: $product['meta_name_ar'] ?? null,
                meta_description_en: $product['meta_description_en'] ?? null,
                meta_description_ar: $product['meta_description_ar'] ?? null,
                meta_keywords_en: $product['meta_keywords_en'] ?? null,
                meta_keywords_ar: $product['meta_keywords_ar'] ?? null,
                slug: $product['slug'] ?? null,
            );
        }

        return new self(
            name_en: $product->name_en,
            name_ar: $product->name_ar,
            description_en: $product->description_en,
            description_ar: $product->description_ar,
            product_category_id: $product->product_category_id,
            price: $product->price,
            photos: $product->photos,
            photo: $product->photo,
            meta_name_en: $product->meta_name_en,
            meta_name_ar: $product->meta_name_ar,
            meta_description_en: $product->meta_description_en,
            meta_description_ar: $product->meta_description_ar,
            meta_keywords_en: $product->meta_keywords_en,
            meta_keywords_ar: $product->meta_keywords_ar,
            slug: $product->slug,
        );
    }
}
