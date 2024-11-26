# Utiliser l'image officielle PHP 8 avec serveur intégré
FROM php:8.2-cli

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/html

# Exposer le port 8081
EXPOSE 8081

# Commande pour lancer le serveur PHP intégré
CMD ["php", "-S", "0.0.0.0:8081", "-t", "/var/www/html"]
