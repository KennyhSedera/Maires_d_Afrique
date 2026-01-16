# 📘 Maires d’Afrique

**Maires d’Afrique** est une application Laravel utilisant une base de données SQLite pour stocker les données.

## 🧾 Prérequis

Avant de commencer, assurez-vous d’avoir :

- PHP ≥ 8.x
- Composer
- SQLite
- Git
- Un terminal ou shell (Git Bash, Terminal, PowerShell…)

## 🚀 Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/KennyhSedera/Maires_d_Afrique.git
cd Maires_d_Afrique

# Sur Windows
type nul > database/database.sqlite

# Sur Linux / Mac
touch database/database.sqlite
notepad .env

#Assurez-vous que ces lignes sont présentes :
DB_CONNECTION=sqlite

#installaton
composer install
npm install

#Exécuter les migrations
php artisan migrate

#Vider le cache
php artisan config:clear
php artisan cache:clear

#Lancer le serveur Laravel
php artisan serve
