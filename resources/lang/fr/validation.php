<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ' :attribute doit être accepté.',
    'active_url' => ' :attribute n\'est pas une URL valide.',
    'after' => ' :attribute doit être une date après :date.',
    'after_or_equal' => ' :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => ' :attribute doit être une date postérieure ou égale à.',
    'alpha_dash' => ' :atttribute doit être une date postérieure ou égale à, chiffres, tirets et traits de soulignement.',
    'alpha_num' => ' :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => ' :attribute doit être un tableau.',
    'before' => ' :attribute doit êdoit être une date postérieure ou égale à :date.',
    'before_or_equal' => ' :attribute doit êdoit être une date postérieure ou égale à  :date.',
    'between' => [
        'numeric' => ' :attribute Doit être entre :min et :max.',
        'file' => ':attribute Doit être entre :min et :max kilobytes.',
        'string' => ' :attribute Doit être entre :min et :max characters.',
        'array' => ' :attribute must have between :min et :max items.',
    ],
    'boolean' => ':attribute le champ doit être vrai ou faux.',
    'confirmed' => ' :attribute la confirmation ne correspond pas.',
    'date' => ' :attribute Ce n\'est pas une date valide.',
    'date_equals' => ' :attribute doit être une date égale à :date.',
    'date_format' => ' :attribute ne correspond pas au format :format.',
    'different' => ' :attribute et :other doit être différent.',
    'digits' => ':attribute doit etre :digits digits.',
    'digits_between' => ':attribute doit etre entre :min et :max digits.',
    'dimensions' => ' :attribute a des dimensions d\'image non valides.',
    'distinct' => ' :attribute le champ a une valeur en double.',
    'email' => ' :attribute doit être une adresse e-mail valide.',
    'ends_with' => ':attribute doit se terminer par l\'un des following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute doit être entre :max.',
        'file' => ':attribute doit être entre :max kilobytes.',
        'string' => ' :attribute doit être entre :max caracteres.',
        'array' => ':attribute may not have more than :max articles.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ' :attribute doit être au moins :min.',
        'file' => ' :attribute doit être au moins :min kilobytes.',
        'string' => ' :attributedoit être au moins :min caracteres.',
        'array' => ' :attribute doit avoir au moins :min articles.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ' :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ' :attribute Champ requis.',
    'required_if' => 'The :attribute Champ requis when :other is :value.',
    'required_unless' => 'The :attribute Champ requis unless :other is in :values.',
    'required_with' => 'The :attribute Champ requis when :values is present.',
    'required_with_all' => 'The :attribute Champ requis when :values are present.',
    'required_without' => 'The :attribute Champ requis when :values is not present.',
    'required_without_all' => 'The :attribute Champ requis when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
