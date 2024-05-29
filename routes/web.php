<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Dashboard\Admin\PressController;
use App\Http\Controllers\Dashboard\Admin\ExhibitorController;
use App\Http\Controllers\Dashboard\MateriSeminarController;
use App\Http\Controllers\Dashboard\Admin\BannerController;
use App\Http\Controllers\Dashboard\Admin\MediaController;
use App\Http\Controllers\Dashboard\Admin\AuctionController;
use App\Http\Controllers\Dashboard\Admin\InvitationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index']);

// Route::get('/welcome', function () {
//     return view('welcome');
// });



Route::group(['middleware' => 'auth'], function () {

    
    Route::get('/home', function () {
        if (auth()->user()->type == 2) {
            return redirect('home/dashboard');
        } elseif (auth()->user()->type == 4) {
            return redirect('home/media/all');
        } elseif (auth()->user()->type == 9) {
            return redirect('home/e-voucher');
        } else {
            return redirect('/');
        }
    });

    Route::post('bid-auction/{id}', [AuctionController::class, 'PostBidAuction']);
    // Route::get('/home/program', function () {
    //     return view('dashboard/admin/program/list');
    // })->name('program');

    // Route::get('/home/invitation', function () {
    //     return view('dashboard/admin/invitation/list');
    // });

    // Route::get('/home/media/all', function () {
    //     return view('dashboard/admin/media/all');
    // });
    
    // Route::get('/home/media/decline', function () {
    //     return view('dashboard/admin/media/decline');
    // });
    
    // Route::get('/home/media/accepted', function () {
    //     return view('dashboard/admin/media/accepted');
    // });

    // Route::get('/home/auction', function () {
    //     return view('dashboard/admin/auction/list');
    // });
    

    // Route::get('/home/press', function () {
    //     return view('dashboard/admin/press/list');
    // });
    
    // Route::get('/home/participant', function () {
    //     return view('dashboard/admin/seminar/list');
    // });
    
    
    // Route::get('/home/materi-seminar-db', function () {
    //     return view('dashboard/admin/materi-seminar/list');
    // });
    
    // Route::get('/home/exhibitor', function () {
    //     return view('dashboard/admin/exhibitor/list');
    // });
    
    // Route::get('/home/opcer-par', function () {
    //     return view('dashboard/admin/opcer-parti');
    // });
    
    
    // Route::get('/home/scan', function () {
    //     return view('dashboard/admin/scan-seminar/list');
    // });
    Route::group([ 'middleware' => ['admin']], function () {
        
        Route::resource('/home/program', ProgramController::class);
        Route::resource('/home/press', PressController::class);
    
        Route::get('/home/evoucher', function () {
            return view('dashboard/admin/evoucher/list');
        });
        
        // Route::get('/home/banner', function () {
        //     return view('dashboard/admin/banner/list');
        // });
    
        Route::get('/home/idcard', function () {
            return view('dashboard/admin/id-card/list');
        });
    
        Route::resource('/home/invitation', InvitationController::class);

    
        Route::get('/home/opcer-par', [Indexcontroller::class, 'listopcerparti']);
        Route::get('/home/scan', [Indexcontroller::class, 'listscanseminar']);
        Route::get('/home/participant', [Indexcontroller::class, 'listparticipant']);
        

    
        Route::get('banner/{id}/delete', ['uses' => 'App\Http\Controllers\Dashboard\Admin\BannerController@destroy', 'as' => 'banner.delete']);
        Route::get('program/{id}/delete', [ProgramController::class, 'destroy'])->name('program.delete');
        Route::get('release/{id}/delete', ['uses' => 'App\Http\Controllers\Dashboard\Admin\PressController@destroy', 'as' => 'release.delete']);
        Route::get('materi-seminar/{id}/delete', [MateriSeminarController::class, 'destroy'])->name('delete.seminar');
        Route::get('auction/{id}/delete', [AuctionController::class, 'destroy'])->name('delete.auction');
            
    Route::resource('/home/exhibitor', ExhibitorController::class);
    
    Route::resource('/home/materi-seminar-db', MateriSeminarController::class);
    
    Route::resource('/home/banner', BannerController::class);
    
    Route::resource('/home/auction', AuctionController::class);
    

    });
  


    Route::get('/home/media/all', [MediaController::class, 'allmedia']);
        
    Route::get('/home/media/accepted', [MediaController::class, 'accepted']);
    
    Route::get('/home/media/decline', [MediaController::class, 'decline']);

    Route::get('/home/media/all/{id}/accept', [MediaController::class, 'acc'])->name('media.accept');
    Route::get('/home/media/all/{id}/decline', [MediaController::class, 'destroy'])->name('media.decline');

        
});

Route::group(['prefix' => 'invitation'], function () {
    Route::get('/{id}/{enc}', [HomeController::class, 'code_list']);
    Route::get('/download/{code}/{encr}', [HomeController::class, 'download']);
    Route::get('download-all/{id}', [HomeController::class, 'downloadall']);
    Route::get('/claim', [HomeController::class, 'ClaimInvitation']);
    Route::post('/register', [HomeController::class, 'PostClaimInvitation']);
});






Route::get('/program/edit', function () {
    return view('dashboard/admin/program/edit');
});

// Route::controller(ProgramController::class)->prefix('prog')->group(function () {
//     Route::get('', 'index')->name('prog');
//     Route::get('create', 'create')->name('prog.create'); 
//     Route::post('store', 'store')->name('prog.store');
//     Route::get('show/{id}', 'show')->name('prog.show');
//     Route::get('edit/{id}', 'edit')->name('prog.edit');
//     Route::put('edit/{id}', 'update')->name('prog.update');
//     Route::delete('destroy/{id}', 'destroy')->name('prog.destroy');
// });

// Route::get('/home1', function () {
//     if ($user = request()->user()) {
//         return view('dashboard/home');
//     }
//     else {
//         $message = 'You are not logged in';
//         return view('auth/login')->with('message', $message);
//     }
    
// });

    
Route::get('/home/dashboard', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/exhibitor-sponsor', function () {
    return view('exhibitor-sponsor');
});

// Route::get('/exhibitor-list', function () {
//     return view('exhibitor-list');
// });


Route::get('/exhibitor-list', [HomeController::class, 'exhibitor']);

Route::get('/floorplan', function () {
    return view('floorplan');
});

Route::get('/offical-partners', function () {
    return view('official-partners');
});

// Route::controller(UserController::class)->group(function () {
//     Route::get('register', 'register')->name('register');
//     Route::post('register', 'registerSave')->name('register.save');
 
//     Route::get('login', 'login')->name('login');
//     Route::post('login', 'loginAction')->name('login.action');
 
//     Route::get('logout', 'logout')->middleware('auth')->name('logout');
// });

Route::post('register', [UserController::class, 'PostMainRegister']);
Route::post('loginpost', [UserController::class, 'login_post']);


Route::get('/register', function () {
    return view('auth/register');
});



Route::get('/buy-ticket', function () {
    return view('buy-ticket');
});

Route::get('/buy-ticket', function () {
    return view('buy-ticket');
});

// Route::get('/login', function () {
//     $message=null;
//     return view('auth/login')->with('message', $message);
// })->name('1login');

// Route::get('/login', function () {
//     if ($user = request()->user()) {
//         $message=null;
//     return view('auth/login')->with('message', $message);
//     }
//     else {
//         $message = 'You are not logged in';
//         return view('auth/login')->with('message', $message);
//     }
// })->name('login');

// Route::get('/press-registration', function () {
//     return view('auth/press-regist');
// });

Route::get('/our-partners', function () {
    return view('our-partners');
});

Route::get('/visitor-service', function () {
    return view('visitor-service');
});

Route::get('/e-catalogue', function () {
    return view('e-catalogue');
});

Route::get('/e-showd', function () {
    return view('e-showd');
});



Route::get('/materi-seminar', [HomeController::class, 'MateriSeminar']);

Route::get('/materi-seminar/{id}', [HomeController::class, 'DetailMateriSeminar']);


// Route::get('/press-release', function () {
//     return view('press/release');
// });

Route::get('/press-registration', [RegisterController::class, 'pressregis']);
Route::post('press-registration', [RegisterController::class, 'save_press'])->name('save.press');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('loginpost', [UserController::class, 'login_post']);
Route::get('/press-release', [HomeController::class, 'pressrelease'])->name('press-release');

Route::get('/auction', [AuctionController::class, 'auction'])->name('auction.view');

Route::get('auction/{slug}', [AuctionController::class, 'details'])->name('auction.details');

Route::get('/logout', [UserController::class, 'logout']);

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');