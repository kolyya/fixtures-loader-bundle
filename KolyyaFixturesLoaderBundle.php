<?php

namespace Kolyya\FixturesLoaderBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KolyyaFixturesLoaderBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = $this->createContainerExtension();
        }

        return $this->extension;
    }
}