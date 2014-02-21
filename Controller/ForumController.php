<?php

namespace Innova\ForumMultimodalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Claroline\KernelBundle\Bundle\AutoConfigurableInterface;

use Claroline\KernelBundle\Bundle\ConfigurationBuilder;

class InnovaForumMultimodalBundle extends Bundle implements AutoConfigurableInterface

{
    public function supports($environment)

    {
        return true;

    }


    public function getConfiguration()
    {

        return new ConfigurationBuilder();
    }

}


