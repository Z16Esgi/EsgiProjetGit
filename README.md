# Projet Git ESGI

## Description
Ce projet a été réalisé dans le cadre du projet Git ESGI.  
Il permet de lancer automatiquement un environnement Laravel avec Docker, Nginx, MySQL et Vite.

Le projet a également été structuré avec :
- un workflow Git par branches
- des hooks Git
- une CI GitHub Actions
- un système de push vers deux remotes

---

## Prérequis
Avant de lancer le projet, il faut avoir installé :

- Docker
- Docker Compose
- Git

---

## Lancement du projet

### 1. Cloner le dépôt
git clone git@github.com:Z16Esgi/EsgiProjetGit.git
cd EsgiProjetGit

### 2. Lancer les conteneurs
docker compose up -d --build

Cette commande permet de :
- construire les images Docker
- démarrer les conteneurs
- créer automatiquement le projet Laravel s’il n’existe pas
- installer les dépendances Composer
- générer le fichier .env
- configurer la base de données
- générer la clé d’application Laravel
- lancer les migrations
- démarrer Vite

### 3. Accéder au projet
Application Laravel :
http://localhost:8000

Serveur Vite :
http://localhost:5173

---

## Commandes utiles

Voir les conteneurs :
docker compose ps

Logs app :
docker compose logs app

Logs nginx :
docker compose logs webserver

Logs DB :
docker compose logs db

Logs node :
docker compose logs node

Arrêter :
docker compose down

Reset complet :
docker compose down -v
docker compose up -d --build

---

## Hook pre-commit

Installation :
cp scripts/pre-commit.sh .git/hooks/pre-commit
chmod +x .git/hooks/pre-commit

---

## GitHub Actions

Workflow automatique dans :
.github/workflows/lint.yml

---

## Push sur deux remotes

git push envoie vers deux dépôts.

Vérifier :
git remote get-url --all --push origin

---

## Auteur
Projet ESGI
