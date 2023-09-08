Q1/ Rappelez les 4 éléments à vérifier pour sécuriser une base de donnée

    1- Protection contre les injections SQL.
    2- Créer un utilisateur unique pour l'application (ne pas lui donner les privilèges ROOT et restreindre à la seule base concernant l'application).
    3- Ne pas exposer la BDD au public.
    4- Ne jamais stocker des mots en clair en base de données (avec hachage de mot de passe).

Q2/ Initialisez un projet Symfony. Créez un système de connexion utilisateur.

    1- Inscription fonctionnelle
    2- Connexion fonctionnelle
    3- Déconnexion fonctionnelle
    4- Page profil fonctionnelle

    // Démontrez par A + B que votre base de donnée est sécurisée. Rédigez un petit rapport incluant des screenshots.

    - Dans un premier temps, Symfony 6 propose par défaut de nombreuses options permettant de protéger des injections SQL. L'ORM Doctrine, notamment, fait office de couche d'abstraction de la base de donnée et génère automatiquement des requetes SQL paramétrées. De plus Symfony propose le Query Builder de Doctrine, qui permet de créer des requêtes SQL de manière programmatique et sécurisée en utilisant des méthodes PHP plutôt que des chaînes SQL brutes.

    Symfony intègre aussi une protection CSRF (Cross-Site Request Forgery) par défaut. Cela empêche les attaques CSRF, qui pourraient être utilisées pour manipuler les requêtes de modification de la base de données.

    - Il existe un utilisateur unique pour l'application pouvant accéder à la BDD (voir capture).
    
    - La BDD n'est pas exposée au public (voir capture).

    - Les mots de passés sont hachés et non affichés en clair en base (voir capture).


Q3/

    1- Edition du profil fonctionnelle
    2- Upload AJAX de l'image de profil non fonctionnelle.

