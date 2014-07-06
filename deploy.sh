#!/bin/sh
MYDIR="`dirname \"$0\"`"
cd $MYDIR
git stash
git pull origin master
php protected/yiic.php migrate --interactive=0
git stash
rm -rf public/assets
mkdir public/assets
php composer.phar update