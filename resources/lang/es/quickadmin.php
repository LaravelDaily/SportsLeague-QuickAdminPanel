<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'teams' => [		'title' => 'Teams',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],
		'players' => [		'title' => 'Players',		'created_at' => 'Time',		'fields' => [			'team' => 'Team',			'name' => 'Name',			'surname' => 'Surname',			'birth-date' => 'Birth date',		],	],
		'games' => [		'title' => 'Games',		'created_at' => 'Time',		'fields' => [			'team1' => 'Team1',			'team2' => 'Team2',			'start-time' => 'Start time',			'result1' => 'Result1',			'result2' => 'Result2',		],	],
	'qa_create' => 'Crear',
	'qa_save' => 'Guardar',
	'qa_edit' => 'Editar',
	'qa_view' => 'Ver',
	'qa_update' => 'Actualizar',
	'qa_list' => 'Listar',
	'qa_no_entries_in_table' => 'Sin valores en la tabla',
	'custom_controller_index' => 'Índice del controlador personalizado (index).',
	'qa_logout' => 'Salir',
	'qa_add_new' => 'Agregar',
	'qa_are_you_sure' => 'Estás seguro?',
	'qa_back_to_list' => 'Regresar a la lista?',
	'qa_dashboard' => 'Tablero',
	'qa_delete' => 'Eliminar',
	'quickadmin_title' => 'Basketball League',
];