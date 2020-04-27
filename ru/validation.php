<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Следующие языковые строки содержат сообщения об ошибках по умолчанию,
    | используемые классом валидатора. Некоторые из этих правил имеют
    | несколько версий, например, правила размера. Не стесняйтесь
    | настраивать каждое из этих сообщений.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute должен быть датой после :date.',
    'after_or_equal' => ':attribute должен быть датой после или равен :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры и тире.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть датой до :date.',
    'before_or_equal' => ':attribute должен быть датой до или равен :date.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайт.',
        'string' => ':attribute должен быть между :min и :max символами.',
        'array' => ':attribute должен содержать от :min до :max элементов.',
    ],
    'boolean' => ':attribute должно быть true или false.',
    'confirmed' => ':attribute Подтверждение не совпадает.',
    'date' => ':attribute не является допустимой датой.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должен быть другим.',
    'digits' => ':attribute должен быть :digits цифровым.',
    'digits_between' => ':attribute должен быть между :min и :max цифрами.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => ':attribute имеет повторяющееся значение.',
    'email' => ':attribute должен быть действительным адресом электронной почты.',
    'exists' => 'выбранный :attribute недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'поле :attribute обязательно для заполнения.',
    'image' => ':attribute должен быть изображением.',
    'in' => 'выбранный :attribute недействителен.',
    'in_array' => 'поле :attribute не существует в :other.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'json' => ':attribute должен быть допустимой строкой JSON.',
    'max' => [
        'numeric' => ':attribute не может быть больше чем :max.',
        'file' => ':attribute не может быть больше, чем :max килобайт.',
        'string' => ':attribute не может быть больше, чем :max символов.',
        'array' => ':attribute может содержать не более :max предметов.',
    ],
    'mimes' => ':attribute должен быть файл типа: :values.',
    'mimetypes' => ':attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file' => ':attribute должно быть не менее :min килобайт.',
        'string' => ':attribute должно быть не менее :min символов.',
        'array' => ':attribute должно иметь как минимум :min предметов.',
    ],
    'not_in' => 'выбранный :attribute недействителен.',
    'numeric' => ':attribute должен быть числом.',
    'present' => ':attribute поле должно присутствовать.',
    'regex' => ':attribute Формат неверен.',
    'required' => ':attribute Поле, обязательное для заполнения.',
    'required_if' => ':attribute Поле обязательно для заполнения, когда :other является :value.',
    'required_unless' => ':attribute Поле обязательно для заполнения, если :other не находится в :values.',
    'required_with' => ':attribute Поле обязательно для заполнения, когда :values присутствуют.',
    'required_with_all' => ':attribute Поле обязательно для заполнения, когда :values присутствуют.',
    'required_without' => ':attribute Поле обязательно для заполнения, когда :values отсутствуют.',
    'required_without_all' => ':attribute поле обязательно для заполнения, когда нет ни одного из :values.',
    'same' => ':attribute и :other должены совпадать.',
    'size' => [
        'numeric' => ':attribute должно быть :size.',
        'file' => ':attribute должно быть :size килобайт.',
        'string' => ':attribute должно быть :size символов.',
        'array' => ':attribute должен содержать :size предметов.',
    ],
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должна быть действительной зоной.',
    'unique' => ':attribute уже занят.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute Формат неверен.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Следующие языковые строки используются для замены атрибутов-заполнителей
    | на более удобные для чтения, такие как адрес электронной почты вместо
    | E-Mail Address. Это просто помогает нам сделать сообщения
    | немного чище.
    |
    */

    'attributes' => [],

    // Внутренняя логика проверки для  Pterodactyl
    'internal' => [
        'variable_value' => ':env переменная',
        'invalid_password' => 'Предоставленный пароль недействителен для этой учетной записи.',
    ],
];
