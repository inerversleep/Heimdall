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

    'accepted'             => ':attribute 必须是公认的。',
    'active_url'           => ':attribute 不是一个有效网址。',
    'after'                => ':attribute 必须是晚于 :date 之后的日期。',
    'after_or_equal'       => ':attribute 日期不能早于 :date。',
    'alpha'                => ':attribute 只能使用字母。',
    'alpha_dash'           => ':attribute 只能包含字母，数字和破折号。',
    'alpha_num'            => ':attribute 只能包含字母和数字。',
    'array'                => ':attribute 必须是一个数组。',
    'before'               => ':attribute 必须是早于 :date 之前的日期。',
    'before_or_equal'      => ':attribute 日期不能晚于 :date。',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 到 :max 之间。',
        'file'    => ':attribute 必须在 :min 到 :max KB之间。',
        'string'  => ':attribute 必须在 :min 到 :max 字符之间。',
        'array'   => ':attribute 必须在 :min 到 :max 项之间',
    ],
    'boolean'              => ':attribute 字段必须是 true 或 false 。',
    'confirmed'            => ':attribute 不匹配。',
    'date'                 => ':attribute 不是一个有效日期。',
    'date_format'          => ':attribute 与 :format 格式不符。',
    'different'            => ':attribute 与 :other 必须不同。',
    'digits'               => ':attribute 必须是 :digits 位。',
    'digits_between'       => ':attribute 必须在 :min 到 :max 位之间',
    'dimensions'           => ':attribute 图片尺寸无效。',
    'distinct'             => ':attribute 字段重复。',
    'email'                => ':attribute 必须是有效电子邮件地址。',
    'exists'               => '所选的 :attribute 无效。',
    'file'                 => ':attribute 必须是文件。',
    'filled'               => ':attribute 字段必须有有效值。',
    'image'                => ':attribute 必须是图片。',
    'in'                   => '所选的 :attribute 无效。',
    'in_array'             => ':attribute 字段不存在于 :other。',
    'integer'              => ':attribute 必须是整数。',
    'ip'                   => ':attribute 必须是有效IP地址。',
    'ipv4'                 => ':attribute 必须是有效IPv4地址。',
    'ipv6'                 => ':attribute 必须是有效IPv6地址。',
    'json'                 => ':attribute 必须是有效的 JSON string.',
    'max'                  => [
        'numeric' => ':attribute 不得大于 :max。',
        'file'    => ':attribute 不得大于 :max KB。',
        'string'  => ':attribute 不得大于 :max 字符。',
        'array'   => ':attribute 不得多于 :max 项。',
    ],
    'mimes'                => ':attribute 必须是 :values 类型的文件。',
    'mimetypes'            => ':attribute 必须是 :values 类型的文件。',
    'min'                  => [
        'numeric' => ':attribute 不得少于 :min.',
        'file'    => ':attribute 不得少于 :min KB。',
        'string'  => ':attribute 不得少于 :min 字符。',
        'array'   => ':attribute 不得少于 :min 项。',
    ],
    'not_in'               => '所选 :attribute 无效。',
    'numeric'              => ':attribute 必须是数字。',
    'present'              => ':attribute 字段必须存在。',
    'regex'                => ':attribute 格式无效。',
    'required'             => ':attribute 必填字段。',
    'required_if'          => '当 :other 是 :value， :attribute 是必填字段。',
    'required_unless'      => 'The :attribute 是必填字段，除非 :other 是在 :values 里。',
    'required_with'        => '当 :values 存在，:attribute 是必填字段。',
    'required_with_all'    => '当 :values 存在，:attribute 是必填字段。',
    'required_without'     => '当 :values 不存在，:attribute 是必填字段。',
    'required_without_all' => '当 :values 都不存在，:attribute 是必填字段。',
    'same'                 => ':attribute 与 :other 必须一致。',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size。',
        'file'    => 'The :attribute 必须是 :size KB。',
        'string'  => 'The :attribute 必须是 :size 字符。',
        'array'   => 'The :attribute 必须包含 :size 项。',
    ],
    'string'               => ':attribute 必须是字符串',
    'timezone'             => ':attribute 必须是有效时区',
    'unique'               => ':attribute 必须已定义。',
    'uploaded'             => ':attribute 上传失败',
    'url'                  => ':attribute 格式无效',

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
            'rule-name' => '自定义消息',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
