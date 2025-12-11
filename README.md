# Laravel + Vue Chat App Monorepo

A monorepo setup for a full-stack application with Laravel backend and Vue.js frontend for a chat app.

## 📁 Project Structure

```
chat-laravel-vue-mono/
├── backend/          # Laravel application
├── frontend/         # Vue.js application (Vite)
├── dev.sh           # Linux development script
├── dev.bat          # Windows batch development script
└── dev.ps1          # Windows PowerShell development script
```

## 🚀 Tech Stack

### Backend
- **Laravel 12** - PHP web framework
- **PHP 8.5+** - Server-side language

### Frontend
- **Vue.js 3** - Progressive JavaScript framework
- **Vite** - Fast build tool and dev server

## 📋 Prerequisites

- PHP 8.5 or higher
- Composer
- Node.js 25+ and npm
- MySQL/PostgreSQL (or your preferred database)

## 🛠️ Setup

### 1. Clone the repository
```bash
git clone <repository-url>
cd chat-laravel-vue-mono
```

### 2. Backend Setup
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

### 3. Frontend Setup
```bash
cd frontend
npm install
```

## 🏃 Running the Application

### Option 1: Use Development Scripts (Recommended)

#### Linux/macOS:
```bash
./dev.sh
```

#### Windows (Batch):
```bash
dev.bat
```

#### Windows (PowerShell):
```powershell
./dev.ps1
```

The scripts will automatically start both the Laravel backend server and Vite frontend dev server.

### Option 2: Manual Start

#### Terminal 1 - Backend:
```bash
cd backend
php artisan serve
```

#### Terminal 2 - Frontend:
```bash
cd frontend
npm run dev
```

## 🌐 Access the Application

- **Frontend**: http://localhost:5173
- **Backend API**: http://localhost:8000

## 📝 Available Commands

### Backend
```bash
cd backend
php artisan serve              # Start Laravel server
php artisan migrate            # Run database migrations
php artisan test               # Run tests
```

### Frontend
```bash
cd frontend
npm run dev                    # Start dev server
npm run build                  # Build for production
npm run preview                # Preview production build
```

## 📦 Building for Production

### Backend
```bash
cd backend
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Frontend
```bash
cd frontend
npm run build
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is open-sourced software licensed under the MIT license.
