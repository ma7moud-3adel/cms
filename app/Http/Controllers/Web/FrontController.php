<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\UseTheme;
use Domain\Blog\Models\Blog;
use Domain\Project\Models\Project;
use Domain\Project\Models\ProjectGallery;
use Domain\Service\Models\Service;
use Domain\Service\Services\ServiceService;
use Domain\Shared\Models\Partner;
use Domain\Shared\Models\PhotoGallary;
use Domain\Shared\Models\Slider;
use Domain\Shared\Models\Testimonial;

class FrontController extends Controller
{
    use UseTheme;

    public function __construct(private ServiceService $service)
    {
        $this->setTheme();
    }


    public function index()
    {
        $projects = Project::all();
        $sliders = Slider::all();
        $services = Service::with('serviceGroup')->get();
        $blogs = Blog::all();
        $partners = Partner::all();
        $testimonials = Testimonial::all();
        $recentBlogs = Blog::latest()->take(3)->get();
        $gallery = PhotoGallary::all();

        return view('theme::index', compact('projects', 'sliders', 'services', 'blogs', 'partners', 'testimonials', 'recentBlogs','gallery'));
    }

    public function services($id)
    {
        $projects = Project::all();
        $services = Service::all();
        $service = Service::where('id', $id)->first();
        $blogs = Blog::all();
        $gallery = PhotoGallary::all();

        return view('theme::services', compact('blogs', 'projects', 'services', 'service', 'gallery'));
    }

    public function blogs()
    {
        $projects = Project::all();
        $services = Service::all();
        $blogs = Blog::all();
        $recentBlogs = Blog::latest()->take(3)->get();
        $gallery = PhotoGallary::all();

        return view('theme::blogs', compact('blogs', 'projects', 'services', 'recentBlogs', 'gallery'));
    }

    public function viewBlog($blogId)
    {

        $projects = Project::all();
        $services = Service::all();
        $blogs = Blog::all();
        $recentBlogs = Blog::latest()->take(3)->get();
        $blog = Blog::with('comments')->findOrFail($blogId);
        $gallery = PhotoGallary::all();

        return view('theme::blog_view', compact('blog', 'blogs', 'projects', 'services', 'recentBlogs','gallery'));
    }

    public function contact()
    {
        $projects = Project::all();
        $sliders = Slider::all();
        $services = Service::all();
        $blogs = Blog::all();
        $gallery = PhotoGallary::all();

        return view('theme::contact', compact('projects', 'sliders', 'services', 'blogs'));
    }

    public function portfolio()
    {
        $services = Service::all();
        $blogs = Blog::all();
        $projects = Project::all();
        $gallery = PhotoGallary::all();

        return view('theme::portfolio', compact('services', 'blogs', 'projects', 'services', 'gallery'));
    }

    public function viewPortfolio($projectId)
    {
        $projects = Project::all();
        $services = Service::all();
        $blogs = Blog::all();
        $project = Project::where('id', $projectId)->with('projectGallery')->first();
        $recentProjects = Project::latest()->take(3)->get();
        $gallery = PhotoGallary::all();


        return view('theme::portfolio_view', compact('project', 'blogs', 'projects', 'services', 'recentProjects', 'gallery'));
    }

    public function about()
    {
        $services = Service::all();
        $blogs = Blog::all();
        $projects = Project::all();
        $gallery = PhotoGallary::all();
        return view('theme::about', compact('services', 'blogs', 'projects', 'services', 'gallery'));
    }

}
