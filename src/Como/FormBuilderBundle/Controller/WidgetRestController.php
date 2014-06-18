<?php

namespace Como\FormBuilderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class WidgetRestController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $widgetRepository = $em->getRepository('ComoFormBuilderBundle:Widget');

        $query = $widgetRepository->createQueryBuilder('w')
            ->getQuery();

        $widgets = $query->getArrayResult();

        return new JsonResponse($widgets);
    }
}
