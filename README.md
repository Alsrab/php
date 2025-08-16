---

🎁 Giveaway Web Application
تطبيق ويب كامل بيسمح للمستخدمين بالمشاركة في السحوبات (Giveaways)، عرض قائمة المشاركين مباشرة، واختيار فائز عشوائي.
مبني باستخدام PHP, MySQL, JavaScript, Bootstrap.

🌐 Live Demo
رابط المشروع: [https://github.com/Alsrab/php](https://github.com/Alsrab/php)

🚀 Features

* تسجيل مستخدمين وتسجيل دخول بإدارة الجلسات (Sessions).
* الاشتراك في السحب عن طريق الاسم والإيميل.
* عرض المشتركين بشكل مباشر.
* اختيار فائز عشوائي بواسطة الأدمن.
* تعديل بيانات الحساب (اسم مستخدم/كلمة مرور).
* حذف الحساب نهائيًا.

🛠️ Technologies Used
Frontend: HTML5, CSS3, JavaScript (ES6+), Bootstrap 5
Backend: PHP, MySQL
Hosting: InfinityFree

📂 Project Structure
/html
giveaway.html
main.html

/php
random\_winner.php
delete\_acc.php
باقي ملفات الـ PHP

/java\_script
load\_user.js
update\_uname.js
update\_pass.js
logout.js
random\_winner.js
refresh.js

index.html
README.md

📌 Setup Instructions
1- انسخ المستودع باستخدام: git clone [https://github.com/Alsrab/php.git](https://github.com/Alsrab/php.git)
2- أنشئ قاعدة بيانات باسم basic\_login
3- استورد ملف SQL الخاص بالجداول
4- عدل بيانات الاتصال داخل ملفات /PHP/
5- تأكد من ربط ملفات HTML بالـ CSS والـ JS
6- ارفع المشروع على الاستضافة وتأكد أن PHP و MySQL شغالين

🔐 Security Considerations

* استخدام PHP Sessions لإدارة تسجيل الدخول.
* التحقق وتنظيف المدخلات لتفادي SQL Injection و XSS.
* تشفير كلمات السر باستخدام password\_hash().
* يفضل استخدام HTTPS عند النشر.

🧪 Testing

* جرّب المشروع محليًا باستخدام XAMPP أو WAMP.
* تأكد من عمل جميع الخصائص قبل رفعه على الاستضافة.


كده كله بقى بنفس ستايل "الحماية" اللي عجبك، Plain Text مرتب من غير Markdown.
تحب أديك نسخة تانية بالإنجليزي بس بنفس الشكل العادي ده برضو؟
