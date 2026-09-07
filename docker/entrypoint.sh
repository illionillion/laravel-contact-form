#!/bin/sh

set -eu

if [ ! -f .env ]; then
    cp .env.example .env
fi

mkdir -p database
touch database/database.sqlite

if [ ! -f vendor/autoload.php ]; then
    composer install --no-interaction
fi

if ! grep -q '^APP_KEY=.' .env; then
    php artisan key:generate --force
fi

php artisan migrate --force

exec "$@"