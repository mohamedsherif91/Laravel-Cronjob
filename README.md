## Steps:
1. php artisan make:job UpdateUSer
2. in job class file edit handle function 
3. create queue table
    php artisan queue:table
    php artisan migrate
4. in .env file QUEUE_CONNECTION=database
5. php artisan config:cache
6. before test must run php artisan queue:work
