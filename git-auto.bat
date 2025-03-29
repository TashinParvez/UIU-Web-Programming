@echo off
cd /d E:\Downlodes\STUDY\WEB\UIU-Web-Programming
echo ------------------------------
echo Pulling latest changes...
git pull
echo ------------------------------
echo Checking Git status...
git status
echo ------------------------------
git status --porcelain > changes.txt

for /f %%i in (changes.txt) do set HAS_CHANGES=1

if not defined HAS_CHANGES (
    echo No changes found. Exiting...
    del changes.txt
    exit
)

echo Changes detected!
git status --short
echo ------------------------------
set /p commit_msg="Enter commit message (or leave empty to cancel commit): "

if "%commit_msg%"=="" (
    echo Commit canceled. Exiting...
    del changes.txt
    exit
)

git add -A
git commit -m "%commit_msg%"
git push
del changes.txt
echo ------------------------------
echo Push completed!
pause
