# Board St-Gau
___

- [Getting started](#Gettingstarted)


### Getting started

1. Faire un `composer install` dans le dossier du projet
2. Configurer le fichier `.env` si il en à un ! sinon créer un duplicata du `.env.example` et y entré les informations suivante:
	- le nom de la BDD `DB_DATABASE`,
	- l'utilisateur et le Mot de passe de celle-ci  `DB_USERNAME & DB_PASSWORD`,
	- puis insêrer les infos de l'api github `GITHUB_ID, GITHUB_SECRET, GITHUB_REDIRECT`

3. Faire un `php artisan migrate` 

4. Et faire un `php artisan serve` connectez-vous au `localhost:8000`
5. Enjoy !