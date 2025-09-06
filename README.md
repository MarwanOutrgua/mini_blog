# Mini Blog

Mini-projet d’apprentissage avec **Laravel** : un mini-blog permettant de gérer des articles (ajout, modification, suppression, affichage).  
L’objectif est de pratiquer les bases de Laravel : **migrations, modèles, contrôleurs, routes et vues Blade**.

---

## 🚀 Fonctionnalités
- CRUD des articles (Create, Read, Update, Delete).
- Utilisation des migrations et modèles Laravel.
- Vues avec Blade et layout de base.

---

## 🛠️ Installation

### Prérequis
- PHP >= 8.1  
- Composer  
- MySQL 

### Étapes
```bash
# Cloner le projet
git clone https://github.com/MarwanOutrgua/mini__blog.git

cd mini__blog

# Installer les dépendances
composer install

# Créer le fichier .env
cp .env.example .env

# Générer la clé d’application
php artisan key:generate

# Configurer la base de données dans le fichier .env
# Puis exécuter les migrations
php artisan migrate
