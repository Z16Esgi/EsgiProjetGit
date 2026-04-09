#!/bin/sh

echo "Running linter before commit..."

if [ -f laravel/package.json ]; then
  cd laravel
  npm run lint || exit 1
else
  echo "No package.json found, skipping lint"
fi