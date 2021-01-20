<?php

namespace Imumz\NovaCopyField;

use Laravel\Nova\Fields\Field;

class NovaCopyField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-copy-field';

    public function copyFromTo($copyValues) {
        
        return $this->withMeta([
            'copyFromTo' => $copyValues,
        ]);

    }
}
