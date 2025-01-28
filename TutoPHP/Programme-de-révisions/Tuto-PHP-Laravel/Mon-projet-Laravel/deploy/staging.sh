#!/bin/bash

echo "Deploying to the staging environment..."

# Run migrations
php artisan migrate --force

# Clear cache
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Deployment to staging is complete."
