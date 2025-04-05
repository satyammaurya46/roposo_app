<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MasterCategory;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $offset = 0;
        $limit = 3000;
        $masterProductCategoryName = [];
        $productCategoryName = [];
        $productSubcategoryName = [];

        $response = [];
        do {
            $response = Http::withHeaders([
                'X-External-Token' => JWT_TOKEN,
            ])->get(API_URL, [
                'type' => 'newOnboardedProducts',
                'limit' => $limit,
                'offset' => $offset,
            ]);

            $products = $response->json()['listElements'];

            if (!empty($products)) {
                foreach ($products as $product) {
                    $masterProductCategoryName[] = $product['masterProductCategoryName'];
                    $productCategoryName[] = $product['productCategoryName'];
                    $productSubcategoryName[] = $product['productSubcategoryName'];

                    //$existCategory = Category::where(['master_category_name' => $product['masterProductCategoryName'], 'category_name' => $product['productCategoryName']])->exists();
                    $existCategory = Category::where(['category_name' => $product['productCategoryName']])->exists();
                    if (!$existCategory) {
                        Category::create(
                            [
                                'master_category_name' => $product['masterProductCategoryName'],
                                'category_name' => $product['productCategoryName'],
                                'slug' => strtolower(str_replace(' ', '-', $product['productCategoryName']))
                            ]
                        );
                    }
                    // $existSubcategory = Subcategory::where(['master_category_name' => $product['masterProductCategoryName'], 'category_name' => $product['productCategoryName'], 'subcategory_name' => $product['productSubcategoryName']])->exists();
                    $existSubcategory = Subcategory::where(['subcategory_name' => $product['productSubcategoryName']])->exists();
                    if (!$existSubcategory) {
                        Subcategory::create(
                            [
                                'master_category_name' => $product['masterProductCategoryName'],
                                'category_name' => $product['productCategoryName'],
                                'subcategory_name' => $product['productSubcategoryName'],
                                'slug' => strtolower(str_replace(' ', '-', $product['productSubcategoryName']))
                            ]
                        );
                    }
                }
                $offset += $limit;
            }
        } while (!empty($products));

        $uniqueMasterCategoryArray = array_unique($masterProductCategoryName);   //remove duplicates from the collected categories
        $uniqueMasterCategoryArray = array_values($uniqueMasterCategoryArray); //reset array keys if needed

        $uniqueCategoryArray = array_unique($productCategoryName);
        $uniqueSubcategoryArray = array_unique($productSubcategoryName);
        // dd($uniqueCategoryArray);
        foreach ($uniqueMasterCategoryArray as $masterCategory) {
            $existMasterCategory = MasterCategory::where('master_category_name', $product['masterProductCategoryName'])->exists();
            if (!$existMasterCategory) {
                MasterCategory::create(
                    [
                        'master_category_name' => $masterCategory,
                        'slug' => strtolower(str_replace(' ', '-', $masterCategory))
                    ]
                );
            }
        }


        // Output or further processing

        $bestSellingProducts = getProducts("bestSellingProducts", 10, 0);
        return view('frontend.home', compact('bestSellingProducts'));
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function aboutUs()
    {
        return view('frontend.about');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function testimonial()
    {
        return view('frontend.testimonials');
    }
}
