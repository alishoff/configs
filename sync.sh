#!/bin/bash

set -ex

cp ~/.config/Code/User/settings.json vscode/
code --list-extensions > vscode/extensions.txt

git add .
git commit -m "Update configs"
git push
