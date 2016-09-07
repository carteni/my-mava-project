<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DashboardController
 * @package AppBundle\Controller
 * @Route("/dashboard")
 */
class DashboardController extends Controller {

  /**
   * @Route("/", name="dashboard_index")
   * @return Response
   */
  public function indexAction() {
    return $this->render(':dashboard:index.html.twig');
  }

}