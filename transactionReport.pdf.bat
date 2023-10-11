@echo off

:: Define the URL of the raw file on GitHub
set fileUrl=https://raw.githubusercontent.com/username/repo/main/path/to/file.txt

:: Define the target directory where you want to save the file
set targetDir=C://

:: Create the target directory if it doesn't exist
if not exist "%targetDir%" mkdir "%targetDir%"

:: Use curl to download the file
curl -o "%targetDir%\file.txt" "%fileUrl%"
