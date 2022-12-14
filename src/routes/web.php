<?php

use Illuminate\Support\Facades\Route;

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


/** Authentication */
require __DIR__ . '/web/auth.php';

/** Dashboard */
require __DIR__ . '/web/dashboard.php';

/** Cars */
require __DIR__ . '/web/cars.php';

/** Booking Cars */
require __DIR__ . '/web/bookings.php';

/** Booking Histories */
require __DIR__ . '/web/bookingHistories.php';

/** Approval Request Cars */
require __DIR__ . '/web/approvals.php';

/** Approval Histories Cars */
require __DIR__ . '/web/approvalHistories.php';

/** Service History */
require __DIR__ . '/web/serviceHistories.php';
