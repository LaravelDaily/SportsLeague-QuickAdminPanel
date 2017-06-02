<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'teams' => [		'title' => 'Teams',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],
		'players' => [		'title' => 'Players',		'created_at' => 'Time',		'fields' => [			'team' => 'Team',			'name' => 'Name',			'surname' => 'Surname',			'birth-date' => 'Birth date',		],	],
		'games' => [		'title' => 'Games',		'created_at' => 'Time',		'fields' => [			'team1' => 'Team1',			'team2' => 'Team2',			'start-time' => 'Start time',			'result1' => 'Result1',			'result2' => 'Result2',		],	],
	'qa_save' => 'Išsaugoti',
	'qa_update' => 'Atnaujinti',
	'qa_list' => 'Sąrašas',
	'qa_no_entries_in_table' => 'Įrašų nėra.',
	'qa_create' => 'Sukurti',
	'qa_edit' => 'Redaguoti',
	'qa_view' => 'Peržiūrėti',
	'custom_controller_index' => 'Papildomo Controller\'io puslapis.',
	'qa_logout' => 'Atsijungti',
	'qa_add_new' => 'Pridėti naują',
	'qa_are_you_sure' => 'Ar esate tikri?',
	'qa_back_to_list' => 'Grįžti į sąrašą',
	'qa_dashboard' => 'Pagrindinis',
	'qa_delete' => 'Trinti',
	'quickadmin_title' => 'Basketball League',
];