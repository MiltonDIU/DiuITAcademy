<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AuditLogsController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\SocialsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\CoursesController;
use  App\Http\Controllers\Admin\SkillsCoveredController;
use App\Http\Controllers\Admin\RequiredSkillsController;
use App\Http\Controllers\Admin\LessonTypesController;
use App\Http\Controllers\Admin\CourseContentTypeController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\LessonsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\UserVerificationController;
use App\Http\Controllers\Member\MemberController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('userVerification/{token}', [UserVerificationController::class,'@approve'])->name('userVerification');
///Ajax request method
Route::get('get-course-content-type', [LessonsController::class,'get_by_course'])->name('course_content_type.get_by_course');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }
    return redirect()->route('admin.home');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','admin']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resources([
        'positions' => PositionController::class,
        'menus' => MenusController::class,
        'article-categories' => ArticleCategoryController::class,
        'articles' => ArticlesController::class,
        'sliders' => SlidersController::class,
        'partners' => PartnersController::class,
        'socials' => SocialsController::class,
        'testimonials' => TestimonialController::class,
        'contacts' => ContactsController::class,
        'teams' => TeamsController::class,
        'course-categories' => CourseCategoryController::class,
        'skills-covereds' => SkillsCoveredController::class,
        'required-skills' => RequiredSkillsController::class,
        'lesson-types' => LessonTypesController::class,
        'course-content-types' => CourseContentTypeController::class,
        'courses' => CoursesController::class,
        'lessons' => LessonsController::class,
    ]);






    // Course Category
    Route::delete('course-categories/destroy', [CourseCategoryController::class,'massDestroy'])->name('course-categories.massDestroy');
    Route::post('course-categories/media', [CourseCategoryController::class,'storeMedia'])->name('course-categories.storeMedia');
    Route::post('course-categories/ckmedia', [CourseCategoryController::class,'storeCKEditorImages'])->name('course-categories.storeCKEditorImages');

    // Skills Covered
    Route::delete('skills-covereds/destroy', [SkillsCoveredController::class,'massDestroy'])->name('skills-covereds.massDestroy');

    // Required S Kills
    Route::delete('required-skills/destroy', [RequiredSkillsController::class,'massDestroy'])->name('required-skills.massDestroy');
    // Lesson Types
    Route::delete('lesson-types/destroy', [LessonTypesController::class,'LessonTypesController@massDestroy'])->name('lesson-types.massDestroy');

    // Course Content Type
    Route::delete('course-content-types/destroy', [CourseContentTypeController::class,'massDestroy'])->name('course-content-types.massDestroy');



    // Courses
    Route::delete('courses/destroy', [CoursesController::class,'massDestroy'])->name('courses.massDestroy');
    Route::post('courses/media', [CoursesController::class,'storeMedia'])->name('courses.storeMedia');
    Route::post('courses/ckmedia', [CoursesController::class,'storeCKEditorImages'])->name('courses.storeCKEditorImages');

    // Lessons
    Route::delete('lessons/destroy', [LessonsController::class,'massDestroy'])->name('lessons.massDestroy');



    // Contacts
    Route::delete('contacts/destroy', [ContactsController::class,'massDestroy'])->name('contacts.massDestroy');


    // Teams
    Route::delete('teams/destroy', [TeamsController::class,'massDestroy'])->name('teams.massDestroy');
    Route::post('teams/media', [TeamsController::class,'storeMedia'])->name('teams.storeMedia');
    Route::post('teams/ckmedia', [TeamsController::class,'storeCKEditorImages'])->name('teams.storeCKEditorImages');


    // Testimonial

    Route::delete('testimonials/destroy', [TestimonialController::class, 'massDestroy'])->name('testimonials.massDestroy');
    Route::post('testimonials/media', [TestimonialController::class, 'storeMedia'])->name('testimonials.storeMedia');
    Route::post('testimonials/ckmedia', [TestimonialController::class, 'storeCKEditorImages'])->name('testimonials.storeCKEditorImages');

    // Sliders
    Route::delete('sliders/destroy', [SlidersController::class, 'massDestroy'])->name('sliders.massDestroy');
    Route::post('sliders/media', [SlidersController::class, 'storeMedia'])->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', [SlidersController::class, 'storeCKEditorImages'])->name('sliders.storeCKEditorImages');

    // Partners
    Route::delete('partners/destroy', [PartnersController::class, 'massDestroy'])->name('partners.massDestroy');
    Route::post('partners/media', [PartnersController::class, 'storeMedia'])->name('partners.storeMedia');
    Route::post('partners/ckmedia', [PartnersController::class, 'storeCKEditorImages'])->name('partners.storeCKEditorImages');

    // Socials
    Route::delete('socials/destroy', [SocialsController::class, 'massDestroy'])->name('socials.massDestroy');

    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class,'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class,'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Audit Logs
    Route::resource('audit-logs', AuditLogsController::class, ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    //    Route::resources(['permissions' => SettingsController::class],['except' => ['create', 'store', 'show', 'destroy']]);
    Route::post('settings/media', [SettingsController::class, 'storeMedia'])->name('settings.storeMedia');
    Route::post('settings/ckmedia', [SettingsController::class, 'storeCKEditorImages'])->name('settings.storeCKEditorImages');
    Route::get('settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');



    // Article Category
    Route::delete('article-categories/destroy', [ArticleCategoryController::class, 'massDestroy'])->name('article-categories.massDestroy');

    // Articles
    Route::delete('articles/destroy', [ArticlesController::class, 'massDestroy'])->name('articles.massDestroy');
    Route::post('articles/media', [ArticlesController::class, 'storeMedia'])->name('articles.storeMedia');
    Route::post('articles/ckmedia', [ArticlesController::class, 'storeCKEditorImages'])->name('articles.storeCKEditorImages');

    // Position
    Route::delete('positions/destroy', [PositionController::class, 'massDestroy'])->name('positions.massDestroy');
    Route::post('positions/media', [PositionController::class, 'storeMedia'])->name('positions.storeMedia');
    Route::post('positions/ckmedia', [PositionController::class, 'storeCKEditorImages'])->name('positions.storeCKEditorImages');
    // Menus
    Route::delete('menus/destroy', [MenusController::class, 'massDestroy'])->name('menus.massDestroy');
});


Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [ChangePasswordController::class,'edit'])->name('password.edit');
        Route::post('password', [ChangePasswordController::class,'update'])->name('password.update');
        Route::post('profile', [ChangePasswordController::class,'updateProfile'])->name('password.updateProfile');
        Route::post('profile/destroy', [ChangePasswordController::class,'destroy'])->name('password.destroyProfile');


        Route::get('/edit',[ProfileController::class,'edit'])->name('edit');
        Route::post('/edit',[ProfileController::class,'updateProfile'])->name('updateProfile');


    }

});
Auth::routes(['register' => true]);
Route::get('userVerification/{token}', [UserVerificationController::class ,'approve'])->name('userVerification');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/api-test',[App\Http\Controllers\HomeController::class,'apiTest'])->name('apiTest');

//frontend route list
Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/courses', [FrontendController::class,'courses'])->name('courses');
Route::get('/courses/{id}/{slug}', [FrontendController::class,'coursesDetails'])->name('course-details');
Route::get('/404', [FrontendController::class,'error404'])->name('error404');
Route::post('/search', [FrontendController::class,'search'])->name('search');
Route::get('/{slug}', [FrontendController::class,'articleDetails'])->name('article-details');


//student functionality

Route::post('/courses-enrollment', [MemberController::class,'coursesEnrollment'])->name('courses-enrollment');

//after login
Route::get('/dashboard/my-profile', [MemberController::class,'myProfile'])->name('student.my-profile');
Route::put('/dashboard/profile-update', [MemberController::class,'profileUpdate'])->name('student.profile-update');
Route::put('dashboard/about', [MemberController::class,'updateAbout'])->name('student.about-update');
Route::post('dashboard/password', [MemberController::class,'updatePassword'])->name('student.password.update');
Route::get('/dashboard/my-course', [MemberController::class,'myCourse'])->name('student.my-course');
Route::get('/dashboard/my-certificate', [MemberController::class,'myCertificate'])->name('student.my-certificate');
Route::get('/dashboard/my-community', [MemberController::class,'myCommunity'])->name('student.my-community');

Route::put('/dashboard/profile-picture-upload', [MemberController::class,'profilePictureUpdate'])->name('student.profile-picture-update');
Route::post('dashboard/users/media', [MemberController::class,'storeMedia'])->name('student.profile.storeMedia');


