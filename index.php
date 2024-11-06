<?php

require 'src/router.php';

// Initialize the Router
$router = new Router();
session_start();
$_SESSION['user_logged_in'] = true;

// Simulate authentication status (replace this with actual authentication logic)
$authenticated = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;

$routes = [
    'auth' => [
        '/sign-in' => 'src/views/public/sign-in.php',
        '/sign-up' => 'src/views/public/sign-up.php',
        '/reset-password' => 'src/views/public/reset-password.php',
        '/reset-new-password' => 'src/views/public/reset-new-password.php',
        '/verify-email' => 'src/views/public/verify-email.php',
        '/verify-email-token' => 'src/views/public/verify-email-token.php',

    ],

    'user' => [
        '/' => 'src/views/user/index.php',
        '/home' => 'src/views/user/index.php',
        '/dashboard' => 'src/views/user/index.php',
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
        '/support' => 'src/views/user/support.php',
    ],

    'admin' => [
        '/admin' => 'src/views/admin/index.php',
        '/users' => 'src/views/admin/users.php',
        '/deposits' => 'src/views/admin/deposits.php',
        '/authentication' => 'src/views/admin/auth/authentication.php',
        '/withdrawals' => 'src/views/admin/withdrawal.php',
        '/tickets' => 'src/views/admin/tickets.php',
        '/settings' => 'src/views/admin/settings.php',
        '/system' => 'src/views/admin/system.php',
        '/send-mail' => 'src/views/admin/send-mail.php',
        '/admin_profile' => 'src/views/admin/profile.php',
    ],

    // 404 route for non-existent URLs
    '404' => [
        '/404' => 'src/views/404.php',
    ]
];

// Add all routes to the router
foreach ($routes as $category => $routeGroup) {
    foreach ($routeGroup as $path => $file) {
        $router->addRoute($path, $file);
    }
}

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Routing logic
if (in_array($requestUri, array_keys($routes['admin']))) { 
    if ($authenticated) {
        require_once __DIR__ . '/includes/admin/head.php';  
        $router->route($requestUri);
        require_once __DIR__ . '/includes/admin/footer.php'; 
    } else {
        header('Location: /sign-in');
        exit();
    }
} elseif (in_array($requestUri, array_keys($routes['auth']))) {
    require_once __DIR__ . '/includes/users/head.php';
    $router->route($requestUri);
    require_once __DIR__ . '/includes/users/footer.php';
} elseif (in_array($requestUri, array_keys($routes['user']))) {
    if ($authenticated) {
        require_once __DIR__ . '/includes/users/head.php';  
        $router->route($requestUri);
        require_once __DIR__ . '/includes/users/footer.php'; 
    } else {
        header('Location: /sign-in');
        exit();
    }
} else {
    // If the route is not found, show the 404 page
    header("HTTP/1.0 404 Not Found");
    $router->route('/404');
}
