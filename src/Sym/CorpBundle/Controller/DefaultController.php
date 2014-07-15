<?php

namespace Sym\CorpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sym\CorpBundle\Entity\Contact;
use Sym\CorpBundle\Form\ContactType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="sym_corp_index")
     * @Template("SymCorpBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('SymCorpBundle:Post')
            ->findOneById(5);

        if (!$post) {
            throw $this->createNotFoundException('Unable to find data');
        }

        return array(
            'post' => $post
        );
    }

    /**
     * @Route("/about", name="sym_corp_about")
     * @Template("SymCorpBundle:Default:about.html.twig")
     */
    public function aboutAction()
    {
        $em = $this->getDoctrine()->getManager();


        $post = $em->getRepository('SymCorpBundle:Post')
            ->findOneById(1);

        if (!$post) {
            throw $this->createNotFoundException('Unable to find data');
        }

        return array(
            'post' => $post
        );
    }

    /**
     * @Route("/history", name="sym_corp_history")
     * @Template("SymCorpBundle:Default:history.html.twig")
     */
    public function historyAction()
    {
        $em = $this->getDoctrine()->getManager();


        $post = $em->getRepository('SymCorpBundle:Post')
            ->findOneById(2);

        if (!$post) {
            throw $this->createNotFoundException('Unable to find data');
        }

        return array(
            'post' => $post
        );
    }

    /**
     * @Route("/team", name="sym_corp_team")
     * @Template("SymCorpBundle:Default:team.html.twig")
     */
    public function teamAction()
    {
        $em = $this->getDoctrine()->getManager();


        $member1 = $em->getRepository('SymCorpBundle:Team')
            ->findOneById(1);

        $member2 = $em->getRepository('SymCorpBundle:Team')
            ->findOneById(2);

        $member3 = $em->getRepository('SymCorpBundle:Team')
            ->findOneById(3);

        $member4 = $em->getRepository('SymCorpBundle:Team')
            ->findOneById(4);

        $member5 = $em->getRepository('SymCorpBundle:Team')
            ->findOneById(5);

        if (!$member1) {
            throw $this->createNotFoundException('Unable to find data');
        }

        return array(
            'member1' => $member1,
            'member2' => $member2,
            'member3' => $member3,
            'member4' => $member4,
            'member5' => $member5
        );
    }

    /**
     * @Route("/joinus", name="sym_corp_joinus")
     * @Template("SymCorpBundle:Default:joinus.html.twig")
     */
    public function joinusAction()
    {
        return array();
    }

    /**
     * @Route("/contact", name="sym_corp_contact")
     * @Template("SymCorpBundle:Default:contact.html.twig")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();

        $form = $this->createForm(new ContactType(), $contact);

        if ($request->getMethod() == 'POST') {
            $form->submit($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact Us - SymCorp')
                    ->setFrom('your@email.com')
                    ->setTo($this->container->getParameter('sym_corp.emails.contact_email'))
                    ->setBody($this->renderView('SymCorpBundle:Default:contactEmail.txt.twig', array('contact' => $contact)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('notice', 'Message sent');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('sym_corp_contact'));
            }
        }

            return array(
                'form' => $form->createView()
            );
    }

    /**
     * @Route("/search", name="sym_corp_search")
     * @Template("SymCorpBundle:Default:search.html.twig")
     */
    public function searchAction()
    {
        // Search code: calling from the service Search
        $query = $this->get('search');
        $posts = $query->search();

        return array(
            'query'        => $query,
            'posts'      => $posts['results'],
        );
    }
}
