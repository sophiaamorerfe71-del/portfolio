#!/bin/sh
exec php -d error_reporting=0 artisan serve --host=0.0.0.0 --port=$PORT