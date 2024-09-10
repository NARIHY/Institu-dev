Pour tester les API liées aux `Subject` et aux `Periods`, vous pouvez créer des fichiers JSON de test qui simulent les données que votre API pourrait recevoir ou retourner. Voici des exemples de JSON pour tester les opérations de création, mise à jour, et affichage des `Subject` et des `Periods`.

### Exemples de JSON pour le Sujet (`Subject`)

1. **Création d'un Sujet (POST)**
   
   ```json
   {
     "subject_name": "Mathematics",
     "subject_description": "This course covers basic to advanced concepts in mathematics.",
     "subject_code": "MATH101",
     "credits": 3
   }
   ```

2. **Mise à Jour d'un Sujet (PUT)**
   
   ```json
   {
     "subject_name": "Advanced Mathematics",
     "subject_description": "This course covers advanced topics in mathematics.",
     "subject_code": "MATH201",
     "credits": 4
   }
   ```

3. **Réponse de la Liste des Sujets (GET)**
   
   ```json
   {
     "data": [
       {
         "id": "1",
         "subject_name": "Mathematics",
         "subject_description": "This course covers basic to advanced concepts in mathematics.",
         "subject_code": "MATH101",
         "credits": 3
       },
       {
         "id": "2",
         "subject_name": "Physics",
         "subject_description": "This course covers fundamental concepts in physics.",
         "subject_code": "PHYS101",
         "credits": 4
       }
     ],
     "meta": {
       "current_page": 1,
       "from": 1,
       "last_page": 1,
       "per_page": 10,
       "to": 2,
       "total": 2
     }
   }
   ```

4. **Réponse pour Afficher un Sujet (GET)**
   
   ```json
   {
     "id": "1",
     "subject_name": "Mathematics",
     "subject_description": "This course covers basic to advanced concepts in mathematics.",
     "subject_code": "MATH101",
     "credits": 3
   }
   ```

### Exemples de JSON pour les Périodes (`Periods`)

1. **Création d'une Période (POST)**
   
   ```json
   {
     "period_name": "Fall Semester",
     "period_description": "The fall semester period for academic year 2024.",
     "start_date": "2024-09-01",
     "end_date": "2024-12-15"
   }
   ```

2. **Mise à Jour d'une Période (PUT)**
   
   ```json
   {
     "period_name": "Spring Semester",
     "period_description": "The spring semester period for academic year 2025.",
     "start_date": "2025-01-15",
     "end_date": "2025-05-15"
   }
   ```

3. **Réponse de la Liste des Périodes (GET)**
   
   ```json
   {
     "data": [
       {
         "id": "1",
         "period_name": "Fall Semester",
         "period_description": "The fall semester period for academic year 2024.",
         "start_date": "2024-09-01",
         "end_date": "2024-12-15",
         "created_at": "2024-08-01T12:00:00Z",
         "updated_at": "2024-08-10T12:00:00Z"
       },
       {
         "id": "2",
         "period_name": "Winter Session",
         "period_description": "The winter session for academic year 2024.",
         "start_date": "2024-01-05",
         "end_date": "2024-02-15",
         "created_at": "2023-12-01T12:00:00Z",
         "updated_at": "2023-12-10T12:00:00Z"
       }
     ],
     "meta": {
       "current_page": 1,
       "from": 1,
       "last_page": 1,
       "per_page": 10,
       "to": 2,
       "total": 2
     }
   }
   ```

4. **Réponse pour Afficher une Période (GET)**
   
   ```json
   {
     "id": "1",
     "period_name": "Fall Semester",
     "period_description": "The fall semester period for academic year 2024.",
     "start_date": "2024-09-01",
     "end_date": "2024-12-15",
     "created_at": "2024-08-01T12:00:00Z",
     "updated_at": "2024-08-10T12:00:00Z"
   }
   ```

### Utilisation des JSON pour les Tests

1. **Création (POST)**:
   Utilisez les JSON de création pour envoyer des requêtes POST à vos points de terminaison `/v1/Teaching-unit/Subject` et `/v1/Teaching-unit/Periods-Management`.

2. **Mise à Jour (PUT)**:
   Utilisez les JSON de mise à jour pour envoyer des requêtes PUT à vos points de terminaison `/v1/Teaching-unit/Subject/{subjectId}` et `/v1/Teaching-unit/Periods-Management/Modification/{periodId}`.

3. **Affichage (GET)**:
   Utilisez les JSON de réponse pour valider les données que votre API retourne lorsqu'une requête GET est effectuée sur `/v1/Teaching-unit/Subject/{subjectId}` et `/v1/Teaching-unit/Periods-Management/Show/{periodId}`.

4. **Liste (GET)**:
   Utilisez les JSON de réponse pour valider les données paginées que votre API retourne pour les listes de sujets et de périodes.
