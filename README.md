## Hướng dẫn

Bước 1: Import database. File SQL trong thư mục document/techbase.sql
Bước 2: cấu hình file .env
Bước 3: giải nén file nén vendor
Bước 4: gõ lệnh php artisan serve trên commander để sử dụng trên host 127.0.0.1:8000
Bước 5: gõ link API POST 127.0.0.1:8000/users/getapikey để lấy API Key của từng user

username: member10
password: 123

Nếu user chưa có API, users/getapikey sẽ tạo API Key bằng một chuỗi ngẫu nhiên.

Bước 6: dùng API Key cho các link khác.

127.0.0.1:8000/users/detail/{id}/{apikey}

## demo.kingdomnvhai.info

Em đã upload project lên host demo.kingdomnvhai.info để thay cho host 127.0.0.1:8000

demo.kingdomnvhai.info/users/detail/{id}/{apikey}

Ví dụ:
http://demo.kingdomnvhai.info/api/list-users/all/W3faey2RaeezmVU8HWujLzCX8wHHIL
