<?php

require 'src/router.php';

// Initialize the Router
$router = new Router();
session_start();
$_SESSION['user_logged_in'] = true;

// Simulate authentication status (replace this with actual authentication logic)
$authenticated = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;

// Define public routes (sign-in and sign-up)
$router->addRoute('/sign-in', 'src/views/public/sign-in.php');
$router->addRoute('/sign-up', 'src/views/public/sign-up.php');

// Define user routes (user pages like analysis, deposit, etc.)
$userRoutes = [
    '/' => 'src/views/user/index.php',
    '/home' => 'src/views/user/index.php',
    '/analysis' => 'src/views/user/analysis.php',
    '/deposit' => 'src/views/user/deposit.php',
    '/history' => 'src/views/user/history.php',
    '/info' => 'src/views/user/info.php',
    '/loan' => 'src/views/user/loan.php',
    '/marketplace' => 'src/views/user/marketplace.php',
    '/settings' => 'src/views/user/settings.php',
    '/profile' => 'src/views/user/profile.php',
    '/referral' => 'src/views/user/referral.php',
    '/service' => 'src/views/user/service.php',
    '/shares' => 'src/views/user/shares.php',
    '/withdrawal' => 'src/views/user/withdrawal.php',
    '/loan' => 'src/views/user/loan.php',
    '/shares' => 'src/views/user/shares.php',
    '/support' => 'src/views/user/support.php',
];

// Add user routes to the router
foreach ($userRoutes as $path => $file) {
    $router->addRoute($path, $file);
}

// Define admin routes (admin pages)
$adminRoutes = [
    'dashboard' => 'src/views/admin/index.php',
    'users' => 'src/views/admin/users.php',
    'deposits' => 'src/views/admin/deposits.php',
    'authentication' => 'src/views/admin/auth/authentication.php',
    'withdrawal' => 'src/views/admin/withdrawal.php',
    'tickets' => 'src/views/admin/tickets.php',
    'settings' => 'src/views/admin/settings.php',
    'system' => 'src/views/admin/system.php',
    'send-mail' => 'src/views/admin/send-mail.php',
    'profile' => 'src/views/admin/profile.php',
];

// Add admin routes to the router
foreach ($adminRoutes as $path => $file) {
    $router->addRoute("/request/$path", $file);
}

// Define the 404 route (for non-existent URLs)
$router->addRoute('/404', 'src/views/404.php');

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Routing logic
if (strpos($requestUri, '/request') === 0) {
    // Admin routes
    if ($authenticated) {
        $router->route($requestUri);
    } else {
        header('Location: /sign-in');
        exit();
    }
} elseif (in_array($requestUri, array_keys($userRoutes))) {
    // User-specific routes
    if ($authenticated) {
        $router->route($requestUri);
    } else {
        header('Location: /sign-in');
        exit();
    }
} else {
    // If the route is not found, show the 404 page
    header("HTTP/1.0 404 Not Found");
    $router->route('/404');
}
