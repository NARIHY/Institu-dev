### README for Teaching Management API

#### Introduction

This API provides endpoints for managing subjects, periods, and training programs within a teaching system. It allows users to perform CRUD (Create, Read, Update, Delete) operations on these entities, as well as retrieve paginated lists of each.

#### Base URL

The base URL for the API is:
```
https://api.example.com/v1
```

### Endpoints

#### Subjects

- **List Subjects**
  - `GET /Teaching-unit/Subject/Course`
  - Retrieves a paginated list of all subjects.

- **Store Subject**
  - `POST /Teaching-unit/Subject/Course`
  - Creates a new subject.

- **Show Subject**
  - `GET /Teaching-unit/Subject/Course/{subjectId}`
  - Retrieves a specific subject by its ID.

- **Update Subject**
  - `PUT /Teaching-unit/Subject/Course/{subjectId}`
  - Updates an existing subject.

- **Delete Subject**
  - `DELETE /Teaching-unit/Subject/Course/{subjectId}`
  - Deletes a specific subject.

#### Periods

- **List Periods**
  - `GET /Teaching-unit/Periods-Management`
  - Retrieves a paginated list of periods.

- **Store Period**
  - `POST /Teaching-unit/Periods-Management`
  - Creates a new period.

- **Show Period**
  - `GET /Teaching-unit/Periods-Management/Show/{periodId}`
  - Retrieves a specific period by its ID.

- **Update Period**
  - `PUT /Teaching-unit/Periods-Management/Show/{periodId}`
  - Updates an existing period.

- **Delete Period**
  - `DELETE /Teaching-unit/Periods-Management/Show/{periodId}`
  - Deletes a specific period.

#### Training Programs

- **List Training Programs**
  - `GET /Training-Management`
  - Retrieves a paginated list of training programs.

- **Store Training Program**
  - `POST /Training-Management`
  - Creates a new training program.

- **Show Training Program**
  - `GET /Training-Management/{trainingId}`
  - Retrieves a specific training program by its ID.

- **Update Training Program**
  - `PUT /Training-Management/{trainingId}`
  - Updates an existing training program.

- **Delete Training Program**
  - `DELETE /Training-Management/{trainingId}`
  - Deletes a specific training program.

### Components

#### Schemas

- **Subject**
  ```yaml
  type: object
  properties:
    id:
      type: string
    name:
      type: string
    description:
      type: string
    created_at:
      type: string
      format: date-time
    updated_at:
      type: string
      format: date-time
  ```

- **Period**
  ```yaml
  type: object
  properties:
    id:
      type: string
    period_name:
      type: string
    period_description:
      type: string
    start_date:
      type: string
      format: date
    end_date:
      type: string
      format: date
    created_at:
      type: string
      format: date-time
    updated_at:
      type: string
      format: date-time
  ```

- **Training**
  ```yaml
  type: object
  properties:
    id:
      type: string
    training_name:
      type: string
    training_description:
      type: string
    created_at:
      type: string
      format: date-time
    updated_at:
      type: string
      format: date-time
  ```

### Authentication

This API requires authentication via [OAuth 2.0](https://oauth.net/2/). Ensure you have the necessary tokens to access the endpoints.

### Error Handling

The API returns standard HTTP status codes for various responses:

- **200 OK**: Successful requests.
- **201 Created**: Resource successfully created.
- **204 No Content**: Successful deletion with no content returned.
- **404 Not Found**: Resource not found.
- **400 Bad Request**: Invalid request parameters.

---

### README for Training Management API

#### Introduction

The Training Management API provides endpoints to manage training programs within a teaching system. This API allows you to create, retrieve, update, and delete training programs, as well as retrieve a paginated list of training programs.

#### Base URL

The base URL for the Training Management API is:
```
https://api.example.com/v1
```

### Endpoints

#### Training Programs

- **List Training Programs**
  - `GET /Training-Management`
  - Retrieves a paginated list of training programs.

- **Store Training Program**
  - `POST /Training-Management`
  - Creates a new training program.

- **Show Training Program**
  - `GET /Training-Management/{trainingId}`
  - Retrieves a specific training program by its ID.

- **Update Training Program**
  - `PUT /Training-Management/{trainingId}`
  - Updates an existing training program.

- **Delete Training Program**
  - `DELETE /Training-Management/{trainingId}`
  - Deletes a specific training program.

### Components

#### Schema

- **Training**
  ```yaml
  type: object
  properties:
    id:
      type: string
    training_name:
      type: string
    training_description:
      type: string
    created_at:
      type: string
      format: date-time
    updated_at:
      type: string
      format: date-time
  ```

### Authentication

Authentication is required to access these endpoints. Please refer to the [OAuth 2.0 documentation](https://oauth.net/2/) for details on how to obtain and use authentication tokens.

### Error Handling

Responses include standard HTTP status codes:

- **200 OK**: Request succeeded.
- **201 Created**: Training program successfully created.
- **204 No Content**: Training program successfully deleted.
- **404 Not Found**: Training program not found.
- **400 Bad Request**: Invalid request data.

### Example Requests

- **List Training Programs**
  ```bash
  curl -X GET "https://api.example.com/v1/Training-Management" -H "Authorization: Bearer YOUR_TOKEN"
  ```

- **Store Training Program**
  ```bash
  curl -X POST "https://api.example.com/v1/Training-Management" -H "Authorization: Bearer YOUR_TOKEN" -H "Content-Type: application/json" -d '{"training_name": "New Training", "training_description": "Description of the new training program."}'
  ```

- **Show Training Program**
  ```bash
  curl -X GET "https://api.example.com/v1/Training-Management/{trainingId}" -H "Authorization: Bearer YOUR_TOKEN"
  ```

- **Update Training Program**
  ```bash
  curl -X PUT "https://api.example.com/v1/Training-Management/{trainingId}" -H "Authorization: Bearer YOUR_TOKEN" -H "Content-Type: application/json" -d '{"training_name": "Updated Training", "training_description": "Updated description."}'
  ```

- **Delete Training Program**
  ```bash
  curl -X DELETE "https://api.example.com/v1/Training-Management/{trainingId}" -H "Authorization: Bearer YOUR_TOKEN"
  ```

# NB No token for moments
