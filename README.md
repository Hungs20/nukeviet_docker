### Cài đặt NukeViet v4.5.06 lên docker
- Bước 1: Clone kho code NukeViet vào thư mục ./src (Thư mục được ánh xạ vào /var/www/html trên container php-apache.

- Bước 2: Truy cập bash của php-apache, chmod nội dung kho code nukeviet vừa clone về.

```bash
docker exec -ti nukeviet_apache bash
cd ..
chmod 777 -R html
```

Nhấn Ctrl+D để thoát bash của container. Chú ý phpapache là tên của container được khai báo trong docker-compose.yml.

- Bước 3: thêm domain mong muốn truy cập vào file hosts:

127.0.0.1	nuke.my
- Bước 4: Truy cập nuke.my:8000 (port đã khai báo trong docker-compose.yml), cài đặt trang web như bình thường. Chú ý, ở bước khai báo thông tin CSDL, nhập tên host là tên của host mariadb đã khai báo trong docker-compose (tên host, không phải tên container), trong trường hợp ví dụ này là db.

Để truy cập PHPMyadmin thì có thể vào địa chỉ localhost:8080 (port đã khai báo trong docker-compose.yml)