#### eForm
```
'providers' => [
  ...
  EmreBaskin\Eadmin\Providers\eFormServiceProvider::class,
];
```
```
'aliases' => [
  ...
  'eForm' => EmreBaskin\Eadmin\FormBuilder\eForm::class,
];
```

#### Usage

**eForm::open()**

 - available & default options:
```
    [
        'method'  => 'POST',
        'action'  => '#',
        'class'   => '',
        'enctype' => '',
    ]
```

- example: 

```
    {!! eForm::open(['action'  => route("saveForm"), 'class'   => 'register-form']) !!}
```

**eForm::close()**

 - no available options

**eForm::input()**

 - available & default options:
```
    [
        'id'          => 'input-' . rand(100000000, 999999999),
        'name'        => 'unnamed' . rand(100000000, 999999999),
        'type'        => 'text',
        'label'       => '',
        'placeholder' => null,
        'value'       => '',
        'class'       => '',
        'disabled'    => false,
        'grid'        => 12,
    ];
```

- example: 

```
    {!! 
        eForm::input([
            'name'        => 'email',
            'type'        => 'email', 
            'class'       => 'form-control', 
            'placeholder' => 'example@example.com', 
            'grid'        => 6
        ]) 
    !!}
```


**eForm::textarea()**

 - available & default options:
```
    [
        'id'          => 'input-' . rand(100000000, 999999999),
        'name'        => 'unnamed' . rand(100000000, 999999999),
        'rows'        => 3,
        'label'       => '',
        'placeholder' => null,
        'value'       => '',
        'class'       => '',
        'disabled'    => false,
        'grid'        => 12,
    ];
```

- example: 

```
    {!! 
        eForm::textarea([
            'name'        => 'description',
            'class'       => 'form-control', 
            'placeholder' => 'Description..', 
            'value'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem est.',
        ]) 
    !!}
```

**eForm::select()**

 - available & default options:
```
    [
        'id'          => 'input-' . rand(100000000, 999999999),
        'name'        => 'unnamed' . rand(100000000, 999999999),
        'datas'       => [],
        'selected'    => null,
        'noScript'    => false,
        'label'       => '',
        'placeholder' => null,
        'value'       => '',
        'class'       => '',
        'disabled'    => false,
        'grid'        => 12,
    ];
```

- example: 

```
    {!! 
        eForm::select([
            'name'        => 'category',
            'class'       => 'form-control', 
            'placeholder' => 'Select Category', 
            'selected'    => '1001_1003',
            'datas'       => [
                    '1000'      => 'Root', 
                    '1001'      => 'Computer', 
                    '1001_1003' => 'Computer > Desktop',  
                    '1001_1004' => 'Computer > Laptop',
                    '1002'      => 'Phone'
                ]
        ]) 
    !!}
```