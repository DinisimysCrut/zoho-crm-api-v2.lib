# Установка пакета

В `composer.json` прописать репозиторий:
```
"repositories": [
     {
       "type": "git",
       "url": "git@bitbucket.org:genioteamerp/zoho-crm-api-v2.git"
     }
]
```
Установить пакет с помощью Composer:
```composer require crmoz/zoho-crm-api-v2:dev-master```



# Настройка в Laravel

Прописать сервис провайдер в `config/app.php` :

``` ZohoCrmApiV2\ServiceProvider::class,```

Опубликовать ресурсы :

``` php artisan vendor:publish ```

Настройка `.env`:

Токен для работы с API Zoho Crm:

``` ZOHO_CRM_TOKEN=your_token ```

# Использование
Подключение класаа ZohoCrmApiV2:
```
use ZohoCrmApiV2\ZohoCrmApiV2;
```
Использование в классах Laravel:
``` 

protected $zohoCrmApiV2;

public function __construct(ZohoCrmApiv2 $zohoCrmApiV2) {
  $this->zohoCrmApiV2 = $zohoCrmApiV2;
}
```
Получить данные из модуля Tasks:
```
public function getTasks() {
  $tasks = $this->zohoCrmApiV2->setModule('Tasks')->records()->getRecords()->request();
}
```
Изменить токен:

Во время запроса
```
$tasks = $this->zohoCrmApiV2->setModule('Tasks')->setToken('token')->records()->getRecords()->request();
```
Установка токена для экземпляра `ZohoCrmApiV2`:
```
$this->zohoCrmApiV2 = $this->zohoCrmApiV2->setToken('token');
$tasks = $this->zohoCrmApiV2->setModule('Tasks')->records()->getRecords()->request();
```
Установка токена через класс конфигурации `ZohoCrmApiV2\ConfigAppRest`:
```
use ZohoCrmApiV2\ZohoCrmApiV2;
use ZohoCrmApiV2\System\ConfigAppRest;
...
ConfigAppRest::getInstance()->setCrmToken('token');
$tasks = $this->zohoCrmApiV2->setModule('Tasks')->records->getRecords()->request();

```