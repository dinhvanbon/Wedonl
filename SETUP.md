# HƯỚNG DẪN CÀI ĐẶT 

### Kiểm tra phiên bản:
```bash
php --version          # Should be 8.2+
composer --version     # Should be 2.0+
node --version         # Should be 18+
npm --version          # Should be 8+
```

## CÁC BƯỚC CÀI ĐẶT

### Bước 1: Cài đặt PHP Dependencies
```bash
composer install
```

### Bước 2: Tạo và cấu hình file .env
```bash
# Tạo file .env từ .env.example
cp .env.example .env

# Tạo application key
php artisan key:generate
```

### Bước 3: Cấu hình Database
**Tạo database:**
1. Mở phpMyAdmin (http://localhost/phpmyadmin)
2. Tạo database mới tên: `laravel_new`
3. Chọn utf8mb4_unicode_ci

### Bước 4: Cài đặt Node.js Dependencies
```bash
npm install
```

### Bước 5: Migration Database
```bash
php artisan migrate
```

### Bước 6: Seeder Dữ liệu mẫu
```bash
php artisan db:seed
```

## KHỞI ĐỘNG ỨNG DỤNG

### Cách 1: Chạy từng terminal (khuyến khích)

**Terminal 1 - Laravel Server:**
```bash
php artisan serve
```
Server sẽ chạy tại: `http://127.0.0.1:8000`

**Terminal 2 - Vite Development Server:**
```bash
npm run dev
```
Vite sẽ chạy tại: `http://localhost:5173`

### Cách 2: Chạy cùng lúc (nếu đã cấu hình)
```bash
composer run dev
```

## TRUY CẬP ỨNG DỤNG

- **Trang chủ**: `http://127.0.0.1:8000`
- **Sản phẩm**: `http://127.0.0.1:8000/products`
- **Giỏ hàng**: `http://127.0.0.1:8000/cart`
- **Blog**: `http://127.0.0.1:8000/blogs`
- **Admin Panel**: `http://127.0.0.1:8000/admin/dashboard`

## TÀI KHOẢN MẪU

Sau khi chạy seeder, bạn sẽ có các tài khoản sau:

### Admin Account:
- **Email**: `admin@example.com`
- **Password**: `password`

### User Account:
- **Email**: `user@example.com`
- **Password**: `password`

## CÁC LỆNH HỮU ÍCH

### Clear Cache:
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

### Tạo Fresh Database:
```bash
php artisan migrate:fresh --seed
```

### Storage Link:
```bash
php artisan storage:link
```