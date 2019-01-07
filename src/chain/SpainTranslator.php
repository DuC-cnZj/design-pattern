<?php

namespace Duc\Chain;

class SpainTranslator extends BaseTranslator
{
    public function translate()
    {
        if ($this->canTranslate()) {
            return '西班牙语输出';
        }

        if (! is_null($this->translator)) {
            return $this->translator->translate();
        } else {
            throw new \Exception('Spain translator not exists');
        }
    }

    public function canTranslate()
    {
        return false;
    }
}
