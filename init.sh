# A self-destructing script to quickly set up the new repository

## Remove Rudy repository details
git remote rm origin
git checkout --orphan master

## README
if [ -f README.md ]; then
	rm README.md
fi

echo "# " >> README.md

## Delete this file
rm init.sh

## Unstage all files
git rm -r --cached .
