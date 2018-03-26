<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GraphController extends Controller
{
	/**
	 * @Route("graph", name="graph")
	 */
	public function index()
	{
		return $this->render('graph/index.html.twig');
	}
}

?>