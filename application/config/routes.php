<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'posts' => [
		'controller' => 'main',
		'action' => 'posts',
	],
	'objects' => [
		'controller' => 'main',
		'action' => 'objects',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/addPost' => [
		'controller' => 'admin',
		'action' => 'addPost',
	],
	'admin/editPost/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'editPost',
	],
	'admin/deletePost/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'deletePost',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/addObject' => [
		'controller' => 'admin',
		'action' => 'addObject',
	],
	'admin/editObject/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'editObject',
	],
	'admin/deleteObject/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'deleteObject',
	],
	'admin/objects/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'objects',
	],
	'admin/objects' => [
		'controller' => 'admin',
		'action' => 'objects',
	],
];