#!/bin/sh

echo "Running linter before commit..."

if [ -f laravel/package.json ]; then
  cd laravel

  if command -v npm >/dev/null 2>&1; then
    npm run lint || exit 1
  else
    echo "npm not found, skipping lint"
  fi
else
  echo "No package.json found, skipping lint"
fi