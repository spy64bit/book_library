# 📚 Book Library

A modern book library management system built with Laravel 12, Livewire, and Tailwind CSS. Features user authentication, book ratings, comments, and favorites functionality.

## 🚀 Tech Stack
- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Livewire 3 + Tailwind CSS 4
- **Database**: MySQL
- **Authentication**: Laravel Fortify

## ⚡ Quick Start (5 minutes)

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm
- MySQL (or XAMPP/Laragon)

### Installation

1. **Clone and navigate**
   ```bash
   git clone https://github.com/spy64bit/book_library.git
   cd book_library
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   - Create a MySQL database named `book_library`
   - Update `.env` with your database credentials:
     ```
     DB_DATABASE=book_library
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

5. **Run migrations with sample data**
   ```bash
   php artisan migrate --seed
   ```

6. **Start the application**
   ```bash
   composer run dev
   ```

🎉 **Open your browser to http://localhost:8000**

## 📱 Features Demo
- **User Registration/Login** - Full authentication system
- **Book Management** - Browse books with pagination, view details
- **Interactive Features** - Rate books, add to favorites, leave comments
- **Real-time Updates** - Powered by Livewire
- **Admin Panel** - Add, edit, delete books (admin users)

## 🛠️ Development Commands

```bash
# Run development server with hot reload
composer run dev
```

