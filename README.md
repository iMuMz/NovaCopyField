# NovaCopyField
Custom Laravel Nova copy field

### Installation

```
composer require imumz/nova-copy-field
```
### Usage

```php
use Imumz\NovaCopyField\NovaCopyField;
...
NovaCopyField::make('Copy')
  ->copyFromTo([
    'field_to_copy' => 'field_to_paste',
    'field_to_copy_2' => 'field_to_paste_2',
    'field_to_copy_3' => 'field_to_paste_3',
    'field_to_copy_4' => 'field_to_paste_4',
    'field_to_copy_5' => 'field_to_paste_5',
  ])
```

![image](https://user-images.githubusercontent.com/22936672/105143445-8c7e0d00-5b04-11eb-956e-0412b6a6d4a9.png)
