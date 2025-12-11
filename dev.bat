@echo off
echo Starting Laravel + Vue Development Environment
echo ================================================
echo.

echo Starting Laravel backend...
start "Laravel Backend" cmd /k "cd backend && php artisan serve"

echo Starting Laravel Reverb...
start "Laravel Reverb" cmd /k "cd backend && php artisan reverb:start"

echo Starting Vue frontend...
start "Vue Frontend" cmd /k "cd frontend && npm run dev"

echo.
echo All servers are starting in separate windows.
echo Close those windows to stop the servers.
