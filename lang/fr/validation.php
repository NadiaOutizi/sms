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

    'accepted' => 'L\':attribute doit être accepté.',
    'accepted_if' => 'L\' :attribut doit être accepté lorsque :other vaut :value.',
    'active_url' => 'L\' :attribut n\'est pas une URL valide.',
    'after' => 'Le :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le :attribut ne doit contenir que des lettres.',
    'alpha_dash' => 'Le :attribut ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'Le :attribut ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le :attribut doit être un tableau.',
    'ascii' => 'Le :attribut ne doit contenir que des caractères alphanumériques à un octet et des symboles.',
    'before' => 'Le :attribut doit être une date avant :date.',
    'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => 'Le :attribute doit avoir entre :min et :max éléments.',
        'file' => 'Le :attribute doit être compris entre :min et :max kilo-octets.',
        'numeric' => 'Le :attribute doit être compris entre :min et :max.',
        'string' => 'Le :attribute doit être compris entre :min et :max caractères.',
    ],
    'date_equals' => 'Le :attribut doit être une date égale à :date.',
    'date_format' => 'Le :attribut ne correspond pas au format :format.',
    'decimal' => 'Le :attribut doit avoir :decimal décimales.',
    'declined' => 'Le :attribute doit être refusé.',
    'declined_if' => 'Le :attribute doit être refusé lorsque :other vaut :value.',
    'different' => 'Le :attribute et :other doivent être différents.',
    'digits' => 'Le :attribut doit être :digits chiffres.',
    'digits_between' => 'Le :attribut doit être compris entre :min et :max chiffres.',
    'dimensions' => 'L\' :attribut a des dimensions d\'image invalides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le :attribute ne peut pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => 'Le :attribut ne peut pas commencer par l\'un des éléments suivants : :values.',
    'email' => 'Le :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'L\'attribut sélectionné n\'est pas valide.',
    'exists' => 'L\'attribut sélectionné n\'est pas valide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
 
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
