# PowerShell development start script
Write-Host "Starting Laravel + Vue Development Environment" -ForegroundColor Green
Write-Host "================================================" -ForegroundColor Green
Write-Host ""

# Start Laravel backend in new window
Write-Host "Starting Laravel backend..." -ForegroundColor Blue
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd backend; php artisan serve"

# Start Laravel Reverb in new window
Write-Host "Starting Laravel Reverb..." -ForegroundColor Blue
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd backend; php artisan reverb:start"

# Start Vue frontend in new window
Write-Host "Starting Vue frontend..." -ForegroundColor Blue
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd frontend; npm run dev"

Write-Host ""
Write-Host "All servers are starting in separate windows." -ForegroundColor Green
Write-Host "Close those windows to stop the servers." -ForegroundColor Green
