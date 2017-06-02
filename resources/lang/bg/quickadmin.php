<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'teams' => [		'title' => 'Teams',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],
		'players' => [		'title' => 'Players',		'created_at' => 'Time',		'fields' => [			'team' => 'Team',			'name' => 'Name',			'surname' => 'Surname',			'birth-date' => 'Birth date',		],	],
		'games' => [		'title' => 'Games',		'created_at' => 'Time',		'fields' => [			'team1' => 'Team1',			'team2' => 'Team2',			'start-time' => 'Start time',			'result1' => 'Result1',			'result2' => 'Result2',		],	],
	'custom_controller_index' => 'Персонализиран контролер.',
	'quickadmin_title' => 'Basketball League',
];