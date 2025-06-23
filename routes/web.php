<?php




use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SendSms;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Bootstrap\SetRequestForConsole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;



// Public route
// الصفحة الرئيسية
Route::get('/', function () {
    if (Auth::check()) { // لو الشخص مسجل دخول
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
    }
    $services = Service::all();
    return view('user.index',compact('services'))->name('home');
});

// Route::get('/sendsms',[SendSms::class,'send']);





/////////////////////////////////////////////////////////
// Dashboard (only for logged-in users)
/////////////////////////////////////////////////////////
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
/////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////
// public services routes
/////////////////////////////////////////////////////////
Route::get('/',[ServiceController::class, 'index'])->name('home');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/contact', function () {
    return view('contacts.index');
})->name('contact');
Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.details');


// Show the login form
Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

// Handle login form submission
Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/form-advanced', function () {
    return view('admin.dashboard.form-advanced');
})->name('form.advanced');

// Routes for both admin and user
Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});


/////////////////////////////////////////////////////////
// admin routes
/////////////////////////////////////////////////////////
// Admin-only routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.services.')->group(function () {
    Route::get('/services', [\App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('index');
    Route::get('/services/create', [\App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('create');
    Route::post('/services', [\App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('store');
    Route::get('/services/{service}/edit', [\App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('edit');
    Route::put('/services/{service}', [\App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('update');
    Route::delete('/services/{service}', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('destroy');
    
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('videos', \App\Http\Controllers\Admin\VideoController::class);
});

// User Routes
Route::get('/videos', [\App\Http\Controllers\VideoController::class, 'index'])->name('videos.index');
Route::get('/videos/{video}', [\App\Http\Controllers\VideoController::class, 'show'])->name('videos.show');

Route::get('/doctor', function () {
    return view('doctors.index');
})->name('doctor');


// Public blogs index (accessible by all)


// Admin routes with auth and role protection
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
});



Route::middleware(['auth', 'role:admin',])->group(function () {


    // Admin dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard.index');
    })->middleware('verified')->name('admin.dashboard');

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile}', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');



    // You can add more admin routes here like managing appointments, users, blogs, etc.
});

// User-only routes
// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/user/appointments', function () {
//         return 'User Appointments';
//     })->name('user.appointments');

//     // You can add more user-only routes here like making appointments
// });

require __DIR__ . '/auth.php';
