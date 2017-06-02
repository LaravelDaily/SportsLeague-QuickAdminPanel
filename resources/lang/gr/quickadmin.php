<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'teams' => [		'title' => 'Teams',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],
		'players' => [		'title' => 'Players',		'created_at' => 'Time',		'fields' => [			'team' => 'Team',			'name' => 'Name',			'surname' => 'Surname',			'birth-date' => 'Birth date',		],	],
		'games' => [		'title' => 'Games',		'created_at' => 'Time',		'fields' => [			'team1' => 'Team1',			'team2' => 'Team2',			'start-time' => 'Start time',			'result1' => 'Result1',			'result2' => 'Result2',		],	],
	'qa_create' => 'Δημιουργία',
	'qa_save' => 'Αποθήκευση',
	'qa_edit' => 'Επεξεργασία',
	'qa_view' => 'Εμφάνιση',
	'qa_update' => 'Ενημέρωησ',
	'qa_list' => 'Λίστα',
	'qa_no_entries_in_table' => 'Δεν υπάρχουν δεδομένα στην ταμπέλα',
	'custom_controller_index' => 'index προσαρμοσμένου controller.',
	'qa_logout' => 'Αποσύνδεση',
	'qa_add_new' => 'Προσθήκη νέου',
	'qa_are_you_sure' => 'Είστε σίγουροι;',
	'qa_back_to_list' => 'Επιστροφή στην λίστα',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Διαγραφή',
	'quickadmin_title' => 'Basketball League',
];