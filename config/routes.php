<?php

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/note/notes.php',
    '/note' => 'controllers/note/note.php',
    '/note-delete' => 'controllers/note/note-delete.php',
    '/note-new' => 'controllers/note/note-new.php',
    '/note-update' => 'controllers/note/note-update.php',

    '/dashboard' => 'controllers/admin/dashboard.php',
    '/admin' => 'controllers/admin/index.php',
    '/admin/users' => 'controllers/admin/users.php',
    '/user-new' => 'controllers/admin/user-new.php',
    '/admin/user-delete' => 'controllers/admin/user-delete.php',
    '/admin/user' => 'controllers/admin/user.php',

    '/login' => 'controllers/login.php',
    '/logout' => 'controllers/logout.php',


];
// dbug($routes);