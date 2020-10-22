<?php

return [
    'daemon_connection_failed' => 'При попытке связи с демоном возникла исключительная ситуация, в результате которой был получен код ответа HTTP/:code. Это исключение зарегистрировано.',
    'node' => [
        'servers_attached' => 'Для удаления с узлом не должно быть связанных серверов.',
        'daemon_off_config_updated' => 'Конфигурация демона <strong>обновлена </strong>, однако произошла ошибка при попытке автоматически обновить файл конфигурации на Демоне. Вам нужно будет вручную обновить файл конфигурации (config.yml), чтобы демон применил эти изменения.',
    ],
    'allocations' => [
        'server_using' => 'Этому распределению назначен сервер. Распределение можно удалить только в том случае, если не назначен сервер.',
        'too_many_ports' => 'Одновременное добавление более 1000 портов в один диапазон не поддерживается.',
        'invalid_mapping' => 'Порт :port недействителен и не может быть обработан.',
        'cidr_out_of_range' => 'Нотация CIDR допускает маски только от /25 до /32.',
        'port_out_of_range' => 'Порты в качестве распределения должны быть больше 1024 и меньше или равны 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Гнездо с подключенными к нему активными серверами нельзя удалить.',
        'egg' => [
            'delete_has_servers' => 'Яйцо с подключенными к нему активными серверами не может быть удалено.',
            'invalid_copy_id' => 'Яйцо, выбранное для копирования сценария, либо не существует, либо копирует сам сценарий.',
            'must_be_child' => 'Директива «Копировать настройки из» для этого яйца должна быть дочерней опцией для выбранного гнезда.',
            'has_children' => 'Это Яйцо является родительским для одного или нескольких других Яиц. Пожалуйста, удалите те яйца перед удалением этого яйца.',
        ],
        'variables' => [
            'env_not_unique' => 'Имя :name должно быть уникальным для этого яйца.',
            'reserved_name' => 'Имя :name защищено и не может быть присвоено переменной.',
            'bad_validation_rule' => 'Правило проверки ":rule" не является допустимым правилом для этого приложения.',
        ],
        'importer' => [
            'json_error' => 'При попытке синтаксического анализа файла JSON произошла ошибка: :error.',
            'file_error' => 'Предоставленный файл JSON недействителен.',
            'invalid_json_provided' => 'Формат предоставленного файла JSON не распознается.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Редактирование вашей учетной записи дополнительного пользователя запрещено.',
        'user_is_owner' => 'Вы не можете добавить владельца сервера в качестве дополнительного пользователя для этого сервера.',
        'subuser_exists' => 'Пользователь с этим адресом электронной почты уже назначен дополнительным пользователем для этого сервера.',
    ],
    'databases' => [
        'delete_has_databases' => 'Невозможно удалить хост-сервер базы данных, с которым связаны активные базы данных.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Максимальный интервал для связанной задачи составляет 15 минут.',
    ],
    'locations' => [
        'has_nodes' => 'Невозможно удалить локацию, к которому прикреплены активные узлы.',
    ],
    'users' => [
        'node_revocation_failed' => 'Не удалось отозвать ключи от <a href=":link">Узел #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Не удалось найти узлов, удовлетворяющих требованиям, указанным для автоматического развертывания.',
        'no_viable_allocations' => 'Распределений, удовлетворяющих требованиям для автоматического развертывания, не обнаружено.',
    ],
    'api' => [
        'resource_not_found' => 'Запрошенный ресурс не существует на этом сервере.',
    ],
];
