<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 14/04/2017
 * Time: 08:46
 */

namespace BlogBundle\Controller;

use BlogBundle\BlogBundle;
use BlogBundle\Entity\Post;
use BlogBundle\Form\CommentType;
use BlogBundle\Form\PostType;
use BlogBundle\Entity\User;
use BlogBundle\Entity\Comment;
use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Post controller.
 *
 * @Route("/")
 */
class IndexController extends Controller
{
    /**
     * alerte.
     *
     * @Route("/", name="index")
     * @Method("GET")
     */
    public function IndexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $alerte = $em->getRepository('BlogBundle:Alerte')->getAllPosts();

        return $this->render('BlogBundle:Default:index.html.twig', array(
            'alerte' => $alerte,
        ));
    }

    /**
     * software.
     *
     * @Route("/software", name="software")
     * @Method("GET")
     */
    public function aboutAction()
    {
        return $this->render('BlogBundle:Default:Software.html.twig');
    }


}