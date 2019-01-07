<?php

namespace Duc\Chain;

class FrenchTranslator extends BaseTranslator
{
    public function translate()
    {
        if ($this->canTranslate()) {
            return '法语输出';
        }

        if (! is_null($this->translator)) {
            return $this->translator->translate();
        } else {
            throw new \Exception('French translator not exists');
        }
    }

    public function canTranslate()
    {
        return true;
    }
}
