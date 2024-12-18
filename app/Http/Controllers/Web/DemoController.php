<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Blog\CommentRequest;
use App\Traits\DemoTheme;
use App\Traits\UseTheme;
use Carbon\Carbon;
use Domain\Blog\DTOs\BlogCommentData;
use Domain\Blog\Models\Blog;
use Domain\Blog\Models\BlogCategory;
use Domain\Blog\Services\BlogCommentService;
use Domain\Category\Models\Category;
use Domain\Product\Models\Product;
use Domain\Project\Models\Project;
use Domain\Project\Models\ProjectCategory;
use Domain\Service\Models\Service;
use Domain\Service\Services\ServiceService;
use Domain\Shared\Models\Partner;
use Domain\Shared\Models\PhotoGallary;
use Domain\Shared\Models\Slider;
use Domain\Shared\Models\Testimonial;

class DemoController extends Controller
{
    use DemoTheme;

    public function __construct(private BlogCommentService $service)
    {
        // Set the theme dynamically based on the .env setting
        $this->setTheme();
    }

    public function index()
    {
        $projects = Project::all();
        $projectCats = ProjectCategory::with('projects')->get();
        $sliders = Slider::all();
        $services = Service::all();
        $blogs = Blog::with('categories')->get();
        // dd($blogs);
        // $gallery = PhotoGallary::where('title', 'web-gallery')->get();
        $partners = Partner::all();
        $testimonials = Testimonial::all();
        // $recentBlogs = Blog::latest()->take(3)->get();
        $blogDate = Blog::first();
        $createdDate = Carbon::parse($blogDate->created_at);
        $day = $createdDate->day;
        $month = $createdDate->format('F');
        $year = $createdDate->year;
        $fullDate = $createdDate->format('F j, Y');

        return view('theme::index', compact(
            'projects',
            'projectCats',
            'sliders',
            'services',
            'blogs',
            // 'gallery',
            'partners',
            'testimonials',
            // 'recentBlogs',
            'day',
            'month',
            'fullDate'
        ));
    }

    public function about()
    {
        return view('theme::about');
    }

    public function contact()
    {
        return view('theme::contacts');
    }

    public function projects()
    {
        $projects = Project::with('category')->get();

        return view('theme::projects', compact('projects'));
    }

    public function singleProject($id)
    {
        $project = Project::with(['category', 'projectGallery' => function ($query) {
            $query->take(4); // Limit the number of galleries to 2
        }])->findOrFail($id);
        $randomProjects = Project::where('id', '!=', $project->id)
            ->take(4)
            ->inRandomOrder()
            ->get();

        return view('theme::project_single', compact('project', 'randomProjects'));
    }

    public function products()
    {
        $products = Product::with('productCategory')->get();

        return view('theme::products', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::with(['productCategory', 'productGallery' => function ($query) {
            $query->take(3); // Limit the number of galleries to 2
        }])->findOrFail($id);
        $randomProducts = Product::where('id', '!=', $product->id)
            ->take(4)
            ->inRandomOrder()
            ->get();

        return view('theme::product_single', compact('product', 'randomProducts'));
    }

    public function blogs()
    {
        $blogs = Blog::all();
        $categories = BlogCategory::all();
        $recentBlogs = Blog::latest()->take(3)->get();
        return view('theme::blogs', compact('blogs', 'categories', 'recentBlogs'));
    }

    public function viewBlogCat($id)
    {
        $blogs = Blog::all();
        $recentBlogs = Blog::latest()->take(3)->get();
        $category = BlogCategory::with('blogs')->findOrFail($id);

        return view('theme::blogs_cat', compact('category', 'blogs', 'recentBlogs'));
    }

    public function viewBlog($id)
    {
        $blog = Blog::with('comments')->findOrFail($id);
        $recentBlogs = Blog::latest()->take(3)->get();
        $categories = BlogCategory::all();
        $createdDate = Carbon::parse($blog->created_at);
        $day = $createdDate->day;
        $month = $createdDate->format('F');
        $year = $createdDate->year;
        $fullDate = $createdDate->format('F j, Y');
        $previousBlog = Blog::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $nextBlog = Blog::where('id', '>', $id)->orderBy('id', 'asc')->first();
        $randomBlogs = Blog::where('id', '!=', $blog->id)
            ->take(4)
            ->inRandomOrder()
            ->get();

        return view('theme::blog_show', compact('categories', 'blog', 'recentBlogs', 'fullDate', 'previousBlog', 'nextBlog', 'randomBlogs'));
    }

    public function storeComment(CommentRequest $request)
    {
        $data = BlogCommentData::from($request->validated());
        $this->service->createComment($data, $request);
        return redirect()->back()->with('success', 'Your Comment Posted Successfully!');
    }

    public function services()
    {
        $services = Service::with('serviceGroup')->get();

        return view('theme::services', compact('services'));
    }

    public function singleService()
    {
        return 'not yet !!';
    }
}
