```
# 🎁 Giveaway Web Application  

A full-stack web application that allows users to participate in giveaways, view participants in real-time, and randomly select a winner. Built with **PHP, MySQL, JavaScript, and Bootstrap**.  

---

## 🌐 Live Demo  
You can view the live version of this project here: [🎁 Giveaway Web Application Live](https://github.com/Alsrab/php.git)  

---

## 🚀 Features  
- **User Registration & Login**: Secure authentication with PHP sessions.  
- **Giveaway Participation**: Users can enter giveaways with their first name, last name, and email.  
- **View Participants**: Display a real-time list of participants.  
- **Random Winner Selection**: Admin can pick a random winner.  
- **User Profile Management**: Update username and password.  
- **Account Deletion**: Users can remove their accounts.  

---

## 🛠️ Technologies Used  

### Frontend  
- HTML5  
- CSS3  
- JavaScript (ES6+)  
- Bootstrap 5  

### Backend  
- PHP  
- MySQL  

### Hosting  
- InfinityFree (PHP & MySQL hosting)  

---

## 📂 Project Structure  

```

/php-giveaway
│
├── /HTML/
│   ├── giveaway.html
│   └── main.html
│
├── /PHP/
│   ├── random\_winner.php
│   ├── delete\_acc.php
│   └── (other PHP scripts)
│
├── /java\_script/
│   ├── load\_user.js
│   ├── update\_uname.js
│   ├── update\_pass.js
│   ├── logout.js
│   ├── random\_winner.js
│   └── refresh.js
│
├── index.html
└── README.md

````

---

## 📌 Setup Instructions  

### Clone the Repository  
```bash
git clone https://github.com/Alsrab/php.git
````

### Database Configuration

1. Create a MySQL database named `basic_login`.
2. Import the provided SQL schema to create the required tables.
3. Update the database connection details in the `/PHP/` scripts.

### Frontend Configuration

* Ensure all HTML files are properly linked to CSS & JS files.
* Adjust file paths if needed to match your server structure.

### Hosting

* Upload the project files to your hosting server.
* Make sure PHP & MySQL are enabled.

---

## 🔐 Security Considerations

* Use **PHP sessions** for authentication & authorization.
* **Validate and sanitize** all user inputs to prevent SQL Injection & XSS.
* Store passwords securely using `password_hash()`.
* Always use **HTTPS** in production.

---

## 🧪 Testing

* Run the project locally using **XAMPP** or **WAMP**.
* Verify all features before deployment.

---
