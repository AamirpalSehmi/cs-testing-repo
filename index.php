<?php
header('Content-Type: text/event-stream');
header('X-Accel-Buffering: no');
header('Cache-Contro: no-cache');
header('Connection: keep-alive');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');


while(true) {
	echo 'id: ' . sha1(mt_rand()) . "\n\n";
	echo 'data: ' . sha1(mt_rand()) . "\n\n";
	@ob_flush();
	@flush();
	usleep(200000);
}