#! /bin/bash

#echo "$PWD"

echo "Read file repositories.txt to array"
IFS=$'\n' read -d '' -r -a lines < ./repositories.txt
#IFS=$'\n' read -d '' -ra values < <(awk -F\" 'NF>=3 {print $4}' ./repositories.json)

for value in "${lines[@]}"
do
  echo ""
  echo "Analyze repository: $value"

#  curl 'https://api.github.com/repos/travis-ci/travis-ci/issues?labels=bug'
done
