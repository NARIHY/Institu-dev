# Gestion de Planification de l'Administration d'un institut

## Introduction

Ce projet utilise Laravel 11 pour concevoir un modèle API complet afin de gérer les différents aspects de la planification administrative au sein de l'établissement. Le système est principalement orienté vers l'organisation des heures supplémentaires ou des heures de vacations des professeurs.

## Objectif Principal du Projet

La gestion de la vacation des professeurs est au cœur de ce projet. Les objectifs principaux sont les suivants :

- **Gestion des plannings** : Création, modification, et suppression des plannings des professeurs.
- **Gestion des classes** : Ajout, modification, et suppression des classes.
- **Gestion des matières** : Ajout, édition, et suppression des matières.
- **Gestion des salles de classe** : (Optionnelle) Génération automatique des salles de classe via un champ.
- **Gestion des professeurs** : Ajout, édition, et suppression des professeurs (à approfondir).
- **Gestion des étudiants** : Intégration avec Sekoly Box pour la gestion des étudiants.
- **Gestion de la paie des professeurs** : Calcul et suivi des rémunérations des professeurs.
- **Gestion du suivi des cours** : (Optionnelle) Suivi de l'avancement des cours.
- **Gestion du suivi des professeurs** : (Optionnelle) Suivi de l'activité des professeurs.

## Fonctionnalités Supplémentaires Possibles

Les fonctionnalités supplémentaires peuvent inclure :

- **Gestion des emplois du temps** : Création, modification, et consultation des emplois du temps individuels (élèves, professeurs) et collectifs (classes).
- **Suivi des notes** : Saisie, consultation, et export des notes des élèves. *(Optionnelle)*
- **Gestion des absences** : Saisie et suivi des absences des élèves et des professeurs. *(Optionnelle)*
- **Forum de discussion** : Espace d'échange entre les professeurs, les élèves, et les parents. *(Optionnelle)*
- **Gestion des ressources pédagogiques** : Bibliothèque numérique de documents, vidéos, exercices, etc., accessible aux enseignants et aux élèves. *(Optionnelle)*
- **Intégration avec d'autres systèmes** : Synchronisation des données avec des logiciels de gestion scolaire existants (ex : Pronote, Moodle). *(Optionnelle)*

## Installation

1. **Cloner le dépôt**

   ```bash
   git clone https://github.com/NARIHY/NARIHY-mg.git
   ```

2. **Installer les dépendances**

   ```bash
   cd NARIHY-mg
   composer install
   ```

3. **Configurer l'environnement**

   Renommez le fichier `.env.example` en `.env` et configurez les variables d'environnement selon vos besoins.

4. **Générer la clé d'application**

   ```bash
   php artisan key:generate
   ```

5. **Exécuter les migrations**

   ```bash
   php artisan migrate
   ```

6. **Démarrer le serveur**

   ```bash
   php artisan serve
   ```

## API Documentation

La documentation de l'API est accessible à l'adresse suivante : [http://localhost:8000/api/documentation](http://localhost:8000/api/documentation)

## Utilisation

Les endpoints de l'API sont décrits dans la documentation Swagger. Vous pouvez utiliser des outils comme Postman pour tester les différentes opérations.

## Contribuer

Les contributions sont les bienvenues ! Pour contribuer, veuillez suivre les étapes suivantes :

1. **Forker le dépôt**
2. **Créer une branche pour votre fonctionnalité** : `git checkout -b ma-nouvelle-fonctionnalite`
3. **Committer vos modifications** : `git commit -am 'Ajoute une nouvelle fonctionnalité'`
4. **Pousser la branche** : `git push origin ma-nouvelle-fonctionnalite`
5. **Créer une Pull Request**

## License

Ce projet est sous la licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Contact

Pour toute question ou suggestion, veuillez contacter :

- **Nom** : RANDRIANARISOA Mahenina
- **Email** : maheninarandrianarisoa@gmail.com

