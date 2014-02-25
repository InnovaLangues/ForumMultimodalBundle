<?php

namespace Innova\ForumMultimodalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ForumController
{
 	/**
     * @Route(
     *	"/hello/{name}",
     * 	name = "test_forum"
     *)
     *Method("GET")
     *@Template("InnovaForumMultimodalBundle::index.html.twig")
     */
    public function indexAction($name)
    {

        return array('name' => $name);
    }

}


