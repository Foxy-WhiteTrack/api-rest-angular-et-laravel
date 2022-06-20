# Etapes de conception:

## Creation du projet et préparation migration table
- Réglages du .env, informations sur la base de données
- AppServiceProvider.php (modif)
- php artisan make:model Product -m (ligne de commande)
- 2022_06_15_132100_create_products_table.php (modif)
- php artisan migrate (ligne de commande)
- php artisan make:controller ProductController

## Récupérer la liste des produits
- api.php (modif) - route
- ProductController.php (modif) - controller

## tester l'api avec postman
- installer le logiciel postman
- réactiver mon compte sur postman
- tester l'api après avoir crée quelques produits

## récupérer un produit grâce à son ID
- ProductController.php (modif) - controller
- getProductById
- api.php (modif) - route
- tester l'api avec postman getProductById

## Ajout Produit
- api.php (modif) - route
- ProductController.php (modif) - controller
- Product.php - Model
- tester l'api avec postman addProduct

## Mise à jour d'un Produit
- ProductController.php (modif) - controller
- api.php (modif) - route
- tester l'api avec postman updateProduct

## Suppression d'un Produit
- ProductController.php (modif) - controller
- api.php (modif) - route
- tester l'api avec postman deleteProduct

## Mise en place d'Angular et lien vers l'api
- ng g class Product
- ng g c components/product-edit --skip-tests
- 

# Comandes
php artisan serve => Connection du serveur (http://127.0.0.1:8000)
