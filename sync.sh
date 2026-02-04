#!/bin/bash

set -ex

# Git
cp ~/.gitconfig git/
cp ~/.gitignore_global git/

# VSCode
cp ~/.config/Code/User/settings.json vscode/
code --list-extensions > vscode/extensions.txt

# Nano
cp ~/.nanorc nano/

# Push
git add .
git commit -m "Update configs"
git push
