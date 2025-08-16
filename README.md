تمام ✅
عملتلك نسخة **احترافية جاهزة للنسخ واللصق**. كل اللي عليك تنسخه وتعمل ملف باسم `README.md` في جذر المشروع.

---

```markdown
# 📌 مشروع PHP – Alsrab/php

مشروع تجريبي بلغة **PHP** للتعلّم والتطوير، منظّم بهيكل واضح يشمل الملفات الأساسية (CSS, JS, Images) وأجزاء الصفحة المشتركة (Header, Footer).

---

## 📂 هيكل المشروع

```

php/
├─ index.php              # الصفحة الرئيسية
├─ css/                   # ملفات التنسيق
│  └─ style.css
├─ javascript/            # سكربتات JavaScript
│  └─ script.js
├─ images/                # الصور
├─ inc/                   # ملفات مساعدة (db.php, config.php…)
└─ parts/                 # أجزاء الصفحة (Header, Footer)
├─ header.php
└─ footer.php

```

---

## ⚙️ المتطلبات

- **PHP 8+**
- **خادم محلي** (XAMPP / WAMP / Laragon)
- (اختياري) **MySQL** إذا كان هناك تعامل مع قواعد بيانات

---

## 🚀 تشغيل المشروع محليًا

### 1) عبر XAMPP
1. انسخ المشروع داخل:
   - `C:\xampp\htdocs\php` (ويندوز)  
   - `/Applications/XAMPP/htdocs/php` (ماك)
2. شغّل **Apache** (و **MySQL** إذا احتجت).
3. افتح المتصفح على:
```

[http://localhost/php](http://localhost/php)

````

### 2) عبر السيرفر المدمج في PHP
من داخل مجلد المشروع:
```bash
php -S localhost:8000
````

ثم:

```
http://localhost:8000
```

---

## 🗄️ إعداد قاعدة البيانات (اختياري)

إن كان هناك نموذج حفظ بيانات (مثال: الاسم والإيميل):

```sql
CREATE DATABASE php CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE php;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(100) NOT NULL,
  lastname  VARCHAR(100) NOT NULL,
  email     VARCHAR(150) NOT NULL UNIQUE
);
```

ملف الاتصال (`inc/db.php`):

```php
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'php';

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die('Database connection error: ' . mysqli_connect_error());
}
```

---

## 🧩 مثال على تضمين الأجزاء

**index.php**

```php
<?php include __DIR__ . '/parts/header.php'; ?>

<main class="container">
  <h1>أهلاً بك 👋</h1>
  <p>هذه الصفحة الرئيسية للمشروع.</p>
</main>

<?php include __DIR__ . '/parts/footer.php'; ?>
```

**parts/header.php**

```php
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>مشروع PHP</title>
  <link rel="stylesheet" href="/php/css/style.css">
</head>
<body>
```

**parts/footer.php**

```php
  <script src="/php/javascript/script.js"></script>
</body>
</html>
```

---

## 💡 ملاحظات

* استخدم:

  ```php
  $fname = $_POST['fname'] ?? '';
  ```

  لتجنّب تحذير: `Undefined array key`.

* تأكد أن سكربتات JS مضمنة قبل وسم `</body>`.

* حدّث المسارات حسب مكان المشروع في السيرفر.

---

## 🤝 المساهمة

* افتح **Issue** لأي مشكلة أو اقتراح.
* اعمل **Fork** ثم **Pull Request** عند إضافة تحسينات.

---

## 📜 الترخيص

🚧 لم تتم إضافة ترخيص بعد. (يمكن إضافة MIT أو أي رخصة مفتوحة المصدر لاحقًا).

---

## 👤 المؤلف

**Alsrab** – مشروع PHP تجريبي للتعلّم.

```

---

تحب أضيفلك جزء **صور Screenshots** في الـ README (عشان الشكل يبقى أجمل في GitHub) ولا تسيبها نص بس؟
```
