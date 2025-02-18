# Lorcana API

Une API RESTful pour gérer votre collection de cartes Lorcana, construite avec Laravel 11.

## Fonctionnalités

- 🔐 Authentification des utilisateurs avec Laravel Sanctum
- 📊 Gestion de votre collection de cartes
- 📝 Suivi des cartes possédées
- 🎯 Gestion de votre liste de souhaits
- 📚 Consultation des sets de cartes

## Installation

1. Clonez le dépôt :
```bash
git clone https://github.com/FatoumataM-27/lorcana-api.git
cd lorcana-api
```

2. Installez les dépendances :
```bash
composer install
```

3. Copiez le fichier d'environnement :
```bash
cp .env.example .env
```

4. Générez la clé d'application :
```bash
php artisan key:generate
```

5. Configurez votre base de données dans `.env`

6. Lancez les migrations :
```bash
php artisan migrate
```

## Endpoints API

### Authentification
- `POST /api/register` - Inscription d'un nouvel utilisateur
- `POST /api/login` - Connexion
- `POST /api/logout` - Déconnexion
- `GET /api/me` - Informations de l'utilisateur connecté

### Cartes
- `GET /api/me/cards` - Liste des cartes de l'utilisateur
- `POST /api/me/{card}/update-owned` - Mise à jour du nombre de cartes possédées

### Sets
- `GET /api/sets` - Liste des sets
- `GET /api/sets/{set}` - Détails d'un set
- `GET /api/sets/{set}/cards` - Cartes d'un set

### Liste de souhaits
- `GET /api/wishlist` - Voir sa liste de souhaits
- `POST /api/wishlist/add` - Ajouter une carte à sa liste
- `POST /api/wishlist/remove` - Retirer une carte de sa liste

## Sécurité

L'API utilise Laravel Sanctum pour l'authentification par token. Toutes les routes protégées nécessitent un token Bearer valide dans le header Authorization.

## Licence

Ce projet est sous licence MIT.
