<?php

namespace Duc\Chain;

class ChineseTranslator extends BaseTranslator
{
    public function translate()
    {
        if ($this->canTranslate()) {
            return '中文翻译输出';
        }

        if (! is_null($this->translator)) {
            return $this->translator->translate();
        } else {
            throw new \Exception('Chinese translator not exists');
        }
    }

    public function canTranslate()
    {
        return false;
    }
}
