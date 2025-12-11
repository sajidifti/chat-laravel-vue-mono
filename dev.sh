#!/bin/bash

# Color output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${GREEN}Starting Laravel + Vue Development Environment${NC}"
echo "================================================"

# Function to cleanup background processes on exit
cleanup() {
    echo -e "\n${BLUE}Shutting down servers...${NC}"
    kill $(jobs -p) 2>/dev/null
    exit
}

# Set up trap to cleanup on script exit
trap cleanup SIGINT SIGTERM EXIT

# Start Laravel backend
echo -e "${BLUE}Starting Laravel backend...${NC}"
cd backend && php artisan serve &

# Start Laravel Reverb
echo -e "${BLUE}Starting Laravel Reverb...${NC}"
cd backend && php artisan reverb:start &

# Start Vue frontend
echo -e "${BLUE}Starting Vue frontend...${NC}"
cd frontend && npm run dev &

# Wait for background processes
wait
