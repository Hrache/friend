<?php

return [

		"driver" => "smtp",
		"host" => "smtp.mailtrap.io",
		"port" => 2525,
		"from" => array(
			"address" => "from@example.com",
			"name" => "Example"
		),
		"username" => "30dea91f15a7a4",
		"password" => "1c909421e74d58",
		"sendmail" => "/usr/sbin/sendmail -bs",

		/*
		|--------------------------------------------------------------------------
		| E-Mail Encryption Protocol
		|--------------------------------------------------------------------------
		|
		| Here you may specify the encryption protocol that should be used when
		| the application send e-mail messages. A sensible default using the
		| transport layer security protocol should provide great security.
		|
		*/

		'encryption' => env('MAIL_ENCRYPTION'),

		/*
		|--------------------------------------------------------------------------
		| Markdown Mail Settings
		|--------------------------------------------------------------------------
		|
		| If you are using Markdown based email rendering, you may configure your
		| theme and component paths here, allowing you to customize the design
		| of the emails. Or, you may simply stick with the Laravel defaults!
		|
		*/

		'markdown' => [
				'theme' => 'default',

				'paths' => [
						resource_path('views/vendor/mail'),
				],
		],

		/*
		|--------------------------------------------------------------------------
		| Log Channel
		|--------------------------------------------------------------------------
		|
		| If you are using the "log" driver, you may specify the logging channel
		| if you prefer to keep mail messages separate from other log entries
		| for simpler reading. Otherwise, the default channel will be used.
		|
		*/

		'log_channel' => env('MAIL_LOG_CHANNEL'),

];
