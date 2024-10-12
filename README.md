# Api_Moives

# tạo bảng

php artisan make:migration create_tên bảng bạn muốn đặt \_table
#tạo model
php artisan make:model tên đầu phải viết hoa đặt đúng tên migration đặt bảng phía trên

# auth

php artisan jwt:secret
php artisan key:generate

# run database + seeder

php artisan migrate:refresh --seed
php artisan migrate:fresh
