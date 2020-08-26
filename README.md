Тестовое задание по API CRM

**Дано:**

1. MySQL таблица `leads_source`, где хранятся источники генерации лидов для CRM:

Id (int)  | Name (text) | Status (int) | created_at (int) | updated_at |
------------- | ------------- | ------------- | ------------- | -------------
1  | Витрина сайта  | 1 | 1575973471 | 1575973471
2  | Лендинг  | 0 | 1575973471 | 1575973471

Где `id` - уникальный автозаполняемый ключ, `name` - название источника, `status` - статус публикации (`0` - неактивно, `1` - активно), `created_at` - UNIX время создания источника, `updated_at`  - UNIX время обновления источника

**Задание:**

1 - Смоделируйте данные таблицы `leads_source` в моделе `LeadsProductsModel.php` таким образом, чтобы при добавлении нового источника в БД, created_at и updated_at заполнялись автоматически

2 - В контролере `Products.php` реализуйте простые CRUD методы:
- добавление нового источника и возвратом полученного для него id.
- обновление источника по id
- удаление источника по id
- получение одного источника по id с поиском по занчению `name` (GET параметр `search`)
- получение всех активных источников c лимитом в 20 строк и смещением, установленного через GET параметр `offset`
- входные параметры должны быть очищены для предотвращения XSS атаки

3 - Выполненный запрос должен возвращать код 200, и JSON ответ `{event: true, message: "Done"}`. При добавлении нового источника в JSON ответе также необходимл вернуть новый id.

Документация по CI 4
https://codeigniter4.github.io/