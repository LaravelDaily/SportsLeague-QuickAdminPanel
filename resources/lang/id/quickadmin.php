<?php

return [
		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'teams' => [		'title' => 'Teams',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],
		'players' => [		'title' => 'Players',		'created_at' => 'Time',		'fields' => [			'team' => 'Team',			'name' => 'Name',			'surname' => 'Surname',			'birth-date' => 'Birth date',		],	],
		'games' => [		'title' => 'Games',		'created_at' => 'Time',		'fields' => [			'team1' => 'Team1',			'team2' => 'Team2',			'start-time' => 'Start time',			'result1' => 'Result1',			'result2' => 'Result2',		],	],
	'qa_create' => 'Buat',
	'qa_save' => 'Simpan',
	'qa_edit' => 'Edit',
	'qa_view' => 'Lihat',
	'qa_update' => 'Update',
	'qa_list' => 'Daftar',
	'qa_no_entries_in_table' => 'Tidak ada data di tabel',
	'custom_controller_index' => 'Controller index yang sesuai kebutuhan Anda.',
	'qa_logout' => 'Keluar',
	'qa_add_new' => 'Tambahkan yang baru',
	'qa_are_you_sure' => 'Anda yakin?',
	'qa_back_to_list' => 'Kembali ke daftar',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Hapus',
	'quickadmin_title' => 'Basketball League',
];