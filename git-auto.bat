@echo off
cd /d "E:\Downlodes\STUDY\WEB\UIU-Web-Programming"
echo Pulling latest changes...
git pull

echo Checking status...
git status

echo Adding all changes...
git add -A

REM Check if there are any staged changes
git diff --staged --quiet
if %ERRORLEVEL% EQU 0 (
    echo No changes to commit.
) else (
    set /p commitMsg="Enter commit message: "
    git commit -m "%commitMsg%"
    echo Pushing changes...
    git push
)

echo Done!
pause