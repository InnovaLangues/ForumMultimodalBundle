<?php

namespace Innova\ForumMultimodalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Claroline\KernelBundle\Bundle\AutoConfigurableInterface;

use Claroline\KernelBundle\Bundle\ConfigurationBuilder;

class ForumController extends Controller

{
 /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

}


