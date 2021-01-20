# NovaCopyField
Custom Laravel Nova copy field

### Installation

```
composer require imumz/nova-copy-field
```
### Usage

```
use Imumz\CopyFieldValues\CopyFieldValues;
...
CopyFieldValues::make('Copy Fields from Residential')
  ->copyFromTo([
  'field_to_copy' => 'field_to_paste',
  'field_to_copy_2' => 'field_to_paste_2',
  'field_to_copy_3' => 'field_to_paste_3',
  'field_to_copy_4' => 'field_to_paste_4',
  'field_to_copy_5' => 'field_to_paste_5',
  ])
```
