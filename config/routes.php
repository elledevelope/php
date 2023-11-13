<?php

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/note-delete' => 'controllers/note-delete.php',
    '/note-new' => 'controllers/note-new.php',
    '/note-update' => 'controllers/note-update.php',

    '/dashboard' => 'controllers/admin/dashboard.php',
    '/admin' => 'controllers/admin/index.php',
    '/admin/users' => 'controllers/admin/users.php',
    '/user-new' => 'controllers/admin/user-new.php',
    '/admin/user-delete' => 'controllers/admin/user-delete.php',
    '/admin/user' => 'controllers/admin/user.php',

];
// dbug($routes);