#!/bin/bash

set -ex

# VSCode
cp ~/.config/Code/User/settings.json vscode/
code --list-extensions > vscode/extensions.txt

# Push
git add .
git commit -m "Update configs"
git push
