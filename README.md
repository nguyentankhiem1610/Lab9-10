# PHP MVC Blog - Lab 9 & 10

## Giới thiệu

Đây là một ứng dụng **Blog đơn giản được xây dựng bằng PHP theo mô hình MVC (Model - View - Controller)**.
Ứng dụng cho phép người dùng:

* Xem danh sách bài viết
* Tạo bài viết mới
* Lưu thông tin bài viết vào cơ sở dữ liệu MySQL

Mục tiêu của project là giúp sinh viên hiểu cách tổ chức code theo mô hình **MVC** trong PHP thuần.

---

# Công nghệ sử dụng

* **PHP**
* **MySQL**
* **HTML / CSS**
* **MVC Architecture**

---

# Cấu trúc thư mục

```
Lab9+10
│
├── app
│   ├── controllers
│   │   └── PostController.php
│   │
│   ├── models
│   │   └── PostModel.php
│   │
│   └── views
│       ├── home.php
│       ├── createpost.php
│       └── style.css
│
├── config
│   ├── config.php
│   └── db_module.php
│
├── database
│   └── posts.sql
│
└── public
    └── index.php
```

---

# Mô hình MVC

## Model

* Chịu trách nhiệm làm việc với cơ sở dữ liệu.
* File:
  `app/models/PostModel.php`

Chức năng:

* Lấy danh sách bài viết
* Thêm bài viết mới

---

## View

Chịu trách nhiệm hiển thị giao diện người dùng.

Các file:

```
home.php
createpost.php
style.css
```

---

## Controller

Xử lý logic giữa Model và View.

File:

```
PostController.php
```

Chức năng:

* Hiển thị danh sách bài viết
* Hiển thị form tạo bài viết
* Lưu bài viết vào database

---

# Database

## Tạo database

```
CREATE DATABASE db_post;
USE db_post;
```

## Tạo bảng

```
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

# Cấu hình database

File:

```
config/config.php
```

```
define("HOST", "localhost");
define("DB", "db_post");
define("USER", "root");
define("PASSWORD", "");
```

---

# Cách chạy project

## Bước 1

Clone hoặc tải project về thư mục **htdocs** của XAMPP.

Ví dụ:

```
C:\xampp\htdocs\Lab9+10
```

---

## Bước 2

Mở **phpMyAdmin** và import database.

---

## Bước 3

Chạy project bằng trình duyệt:

```
http://localhost/Lab9+10/public/
```

---

# Chức năng hiện có

* Hiển thị danh sách bài viết
* Tạo bài viết
* Lưu bài viết vào MySQL
* Hiển thị tác giả
* Hiển thị ngày đăng bài

---

# Giao diện

Ứng dụng có:

* Trang **Danh sách bài viết**
* Trang **Tạo bài viết**

Giao diện được thiết kế bằng **CSS cơ bản** để dễ hiểu và dễ chỉnh sửa.

---

# Tác giả

Sinh viên thực hiện: **Sky**

Project phục vụ cho mục đích **học tập và thực hành mô hình MVC trong PHP**.

---

# Ghi chú

Đây là project PHP MVC cơ bản nhằm mục đích học tập.
Có thể mở rộng thêm các chức năng:

* Sửa bài viết
* Xóa bài viết
* Phân trang
* Đăng nhập người dùng
* Upload hình ảnh
* Bootstrap UI
