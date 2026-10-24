<?php
// Configure DATABASE_URL in the PHP server environment; never commit credentials.
$connectionString = getenv('DATABASE_URL');
if (!$connectionString) {
    http_response_code(503);
    exit('Database configuration is unavailable.');
}
$con = @pg_connect($connectionString);
if (!$con) {
    http_response_code(503);
    exit('Database connection is unavailable.');
}
