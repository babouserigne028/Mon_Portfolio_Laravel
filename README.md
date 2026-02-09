# Mon Portfolio Laravel

> Portfolio web développé avec Laravel, mettant en avant mes compétences, projets et expériences.

## Fonctionnalités

# Mon_Portfolio_Laravel

Portfolio web développé avec Laravel, Blade, Tailwind CSS et MySQL.

## Fonctionnalités

- Présentation dynamique de projets, technologies et domaines de compétence
- Association des technologies aux domaines
- Filtrage des projets par technologie
- Interface responsive et moderne
- Stockage d’images et fichiers dans public/storage

## Prérequis

- PHP >= 8.3
- Composer
- MySQL
- Node.js & npm (pour assets front)

## Installation

1. Cloner le dépôt :
    ```bash
    git clone https://github.com/votre-utilisateur/Mon_Portfolio_Laravel.git
    cd Mon_Portfolio_Laravel
    ```
2. Installer les dépendances :
    ```bash
    composer install
    npm install
    ```
3. Configurer l’environnement :
    - Copier `.env.example` en `.env` et adapter les variables (DB, mail, etc.)
    - Générer la clé :
        ```bash
        php artisan key:generate
        ```
4. Préparer la base de données :

    ```bash
    php artisan migrate --seed
    ```

    Les seeders créent des données de démonstration avec des UUID fixes pour garantir la cohérence.

5. Compiler les assets front :

    ```bash
    npm run build
    ```

6. Lancer le serveur :
    ```bash
    php artisan serve
    ```

## Stockage des fichiers

- Les fichiers nécessaires (images, etc.) sont dans `public/storage`.
- Ce dossier est versionné pour garantir la reproductibilité.
- Si besoin, créez le lien symbolique :
    ```bash
    php artisan storage:link
    ```

## Structure des données

- Les seeders utilisent des UUID et valeurs fixes pour tous les projets, technologies, domaines et associations.
- Après chaque clonage, lancez `php artisan migrate --seed` pour retrouver les mêmes données.

## Sécurité

- Ne stockez pas de données sensibles dans les seeders.
- Les mots de passe de démo sont hashés.

## Contribution

1. Forkez le projet
2. Créez une branche
3. Proposez vos modifications via une Pull Request

## Licence

Ce projet est sous licence MIT.

## Auteur

Serigne Abdoulaye Babou

## Installation

1. Clonez le dépôt :
    ```bash
    git clone <url-du-repo>
    ```
2. Installez les dépendances :
    ```bash
    composer install
    npm install && npm run build
    ```
3. Configurez le fichier `.env` (copiez `.env.example`)
4. Lancez le serveur :
    ```bash
    php artisan serve
    ```

## Utilisation

- Accédez à l’application sur [http://127.0.0.1:8000](http://127.0.0.1:8000)
- Modifiez les sections dans `resources/views/components` pour personnaliser le contenu

## Auteur

Serigne Abdoulaye Babou

## Licence

Ce projet est sous licence MIT.
