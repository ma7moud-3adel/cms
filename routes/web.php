<?php

use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Dashboard\Blog\BlogController;
use App\Http\Controllers\Dashboard\Blog\CommentController;
use App\Http\Controllers\Dashboard\Blog\BlogCategoryController;
use App\Http\Controllers\Dashboard\Category\CategoryController;
use App\Http\Controllers\Dashboard\Course\CourseLevelController;
use App\Http\Controllers\Dashboard\Course\CourseCategoryController;
use App\Http\Controllers\Dashboard\Course\CourseController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Product\ProductCategoryController;
use App\Http\Controllers\Dashboard\Product\ProductController;
use App\Http\Controllers\Dashboard\Project\ProjectCatController;
use App\Http\Controllers\Dashboard\Project\ProjectController;
use App\Http\Controllers\Dashboard\Service\ServiceController;
use App\Http\Controllers\Dashboard\Service\ServiceGroupController;
use App\Http\Controllers\Dashboard\Shared\City\CityController;
use App\Http\Controllers\Dashboard\Shared\Government\GovernmentController;
use App\Http\Controllers\Dashboard\Shared\Setting\SettingController;
use App\Http\Controllers\Dashboard\Shared\User\UserController;
use App\Http\Controllers\Dashboard\Support\LanguageController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Dashboard\Shared\ClientCategory\ClientCategoryController;
use App\Http\Controllers\Dashboard\Shared\Client\ClientController;
use App\Http\Controllers\Dashboard\Shared\Slider\SliderController;
use App\Http\Controllers\Dashboard\Shared\Partner\PartnerController;
use App\Http\Controllers\Dashboard\Shared\PhotoGallary\PhotoGallaryController;
use App\Http\Controllers\Dashboard\Shared\Testimonial\TestimonialController;
use App\Http\Controllers\Web\DemoController;
use App\Http\Controllers\Web\FrontController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'dashboard', 'middleware' => ['dashboard-lang']], function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login');
    });

    Route::post('/logout', [AdminAuthController::class, 'logout'])
        ->name('dashboard.admin.logout')
        ->middleware('admin');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/index', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/category/index-datatable', [CategoryController::class, 'indexDataTable']);
        Route::get('change-lang/{lang}', [LanguageController::class, 'changeLang']);
        Route::resource('/category', CategoryController::class);

        //Admin Profiles
        Route::put('admin/change-status', [AdminController::class, 'changeStatus'])->name('admin.change-status');
        Route::get('dashboard/admin/index-datatable', [AdminController::class, 'indexDatatable'])->name('admin.index-datatable');
        Route::resource('admin', AdminController::class)->except(['show']);

        Route::get('/course-category/index-datatable', [CourseCategoryController::class, 'indexDatatable'])->name('courseCategory.datatable');
        Route::resource('/course-category', CourseCategoryController::class);
        Route::resource('/course-level', CourseLevelController::class);
        Route::get('/course/index-datatable', [CourseController::class, 'indexDatatable'])->name('course.index-datatable');
        Route::resource('course', CourseController::class);

        #service
        Route::get('/service/index-datatable', [ServiceController::class, 'indexDatatable'])->name('service.index-datatable');
        Route::get('/service-group/index-datatable', [ServiceGroupController::class, 'indexDatatable'])->name('service-group.index-datatable');
        Route::resource('/service', ServiceController::class);
        Route::resource('/service-group', ServiceGroupController::class);

        #Product
        Route::get('/product/index-datatable', [ProductController::class, 'indexDatatable'])->name('product.index-datatable');
        Route::resource('/product', ProductController::class);
        Route::get('/product-category/index-datatable', [ProductCategoryController::class, 'indexDatatable'])->name('product-category.index-datatable');
        Route::resource('/product-category', ProductCategoryController::class);


        #Users
        Route::get('/users/index-datatable', [UserController::class, 'indexDatatable'])->name('user.datatable');
        Route::get('users/', [UserController::class, 'index'])->name('user');
        Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

        #Government-City
        Route::get('/government/index-datatable', [GovernmentController::class, 'indexDatatable'])->name('gov.datatable');
        Route::resource('government', GovernmentController::class);
        Route::get('/city/index-datatable', [CityController::class, 'indexDatatable'])->name('city.datatable');
        Route::resource('city', CityController::class);

        #Blogs
        Route::get('/blogs/index-datatable', [BlogController::class, 'indexDatatable'])->name('blogs.datatable');
        Route::resource('blogs', BlogController::class);
        Route::get('blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

        #Sections
        // Route::get('blogs/#section', [BlogCategoryController::class, 'index'])->name('sections');
        Route::get('/blogCategory/index-datatable', [BlogCategoryController::class, 'indexDatatable'])->name('blogCategory.datatable');
        Route::resource('sections', BlogCategoryController::class);

        #Comments
        Route::resource('comments', CommentController::class);
        // Route::get('blogs/#comment', [CommentController::class, 'index'])->name('comments');

        #Projects
        Route::get('/projects/index-datatable', [ProjectController::class, 'indexDatatable'])->name('project.datatable');
        Route::resource('projects', ProjectController::class);
        Route::get('/project_categories/index-datatable', [ProjectCatController::class, 'indexDatatable'])->name('projectCat.datatable');
        Route::resource('project_categories', ProjectCatController::class);

        #slider
        Route::get('/slider/index-datatable', [SliderController::class, 'indexDatatable'])->name('slider.datatable');
        Route::resource('slider', SliderController::class);

        #Testimonial
        Route::get('/testimonial/index-datatable', [TestimonialController::class, 'indexDatatable'])->name('testimonial.datatable');
        Route::resource('testimonial', TestimonialController::class);

        #Partner
        Route::get('/partner/index-datatable', [PartnerController::class, 'indexDatatable'])->name('partner.datatable');
        Route::resource('partner', PartnerController::class);

        #Client - ClientCategory
        Route::get('/clientCategory/index-datatable', [ClientCategoryController::class, 'indexDatatable'])->name('clientCat.datatable');
        Route::resource('clientCategory', ClientCategoryController::class);
        Route::get('/client/index-datatable', [ClientController::class, 'indexDatatable'])->name('client.datatable');
        Route::resource('client', ClientController::class);


        #Gallary
        Route::resource('gallary', PhotoGallaryController::class);


        Route::prefix('settings')->group(function () {
            Route::get('/', [SettingController::class, 'index'])->name('settings.index'); // Display all settings
            Route::put('settings/update', [SettingController::class, 'update'])->name('settings.update');
        });

        #Users
        Route::get('users/', [UserController::class, 'index'])->name('user');
        Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::get('blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
    });
});


# --------------------------------  Web Routes -------------------------------------------------------------------------


Route::group(['middleware' => ['dashboard-lang']], function () {
    Route::get('/', [FrontController::class, 'index'])->name('web.index');
    Route::get('/blogs', [FrontController::class, 'blogs'])->name('web.blogs');
    Route::get('/about', [FrontController::class, 'about'])->name('web.about');
    Route::get('/terms', [FrontController::class, 'terms'])->name('web.terms');
    Route::get('/blog/{blog_name}', [FrontController::class, 'viewBlog'])->name('web.blog.view');
    Route::get('/contact', [FrontController::class, 'contact'])->name('web.contact');

    Route::get('/services', [FrontController::class, 'services'])->name('web.services');
    Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('web.portfolio');

    Route::get('/services/{id}', [FrontController::class, 'services'])->name('web.services');
    Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('web.portfolio');

    Route::get('/portfolio/{portfolio_name}', [FrontController::class, 'viewPortfolio'])->name('web.portfolio.view');
    Route::get('change-lang/{lang}', [LanguageController::class, 'changeLang'])->name('web.change.lang');
});

Route::group(['prefix' => 'demo', 'middleware' => ['dashboard-lang']], function () {
    Route::middleware('guest:web')->group(function () {
        Route::get('/user/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
        Route::post('/user/login', [UserAuthController::class, 'login'])->name('user.login.store');
        Route::get('/user/register', [UserAuthController::class, 'showRegisterForm'])->name('user.register');
        Route::post('/users/register', [UserAuthController::class, 'store'])->name('user.register.store');
    });


    Route::middleware(['auth:web'])->group(function () {

        Route::get('/index', [DemoController::class, 'index'])->name('demo.index');
        Route::get('/about', [DemoController::class, 'about'])->name('demo.about');
        Route::get('/contact', [DemoController::class, 'contact'])->name('demo.contact');
        Route::get('/projects', [DemoController::class, 'projects'])->name('demo.projects');
        Route::get('/project/{id}', [DemoController::class, 'singleProject'])->name('demo.projectSingle');
        Route::get('/products', [DemoController::class, 'products'])->name('demo.products');
        Route::get('/product/{id}', [DemoController::class, 'singleProduct'])->name('demo.productSingle');
        Route::get('/blogs', [DemoController::class, 'blogs'])->name('demo.blogs');
        Route::get('/blog_cat/{id}', [DemoController::class, 'viewBlogCat'])->name('demo.viewBlogCat');
        Route::get('/blog_show/{id}', [DemoController::class, 'viewBlog'])->name('demo.viewBlog');
        Route::post('/comment', [DemoController::class, 'storeComment'])->name('demo.commentStore');
        Route::get('/services', [DemoController::class, 'services'])->name('demo.services');
        Route::get('/service/{id}', [DemoController::class, 'singleService'])->name('demo.serviceSingle');
        Route::get('change-lang/{lang}', [LanguageController::class, 'changeLang'])->name('demo.change.lang');

        #logout
        Route::post('/user/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    });
});
