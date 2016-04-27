<?php

namespace ClothstudioBundle\Controller;

use ClothstudioBundle\Form\UserType;
use ClothstudioBundle\Form\CustomerType;
use ClothstudioBundle\Entity\User;
use ClothstudioBundle\Entity\Customer;
use ClothstudioBundle\Form\ChangePasswordType;
use ClothstudioBundle\Form\Model\ChangePassword;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Component\Form\Extension\Core\Type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class UserController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction(Request $request) {
        return $this->render('ClothstudioBundle:User:index.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request) {
        /*
         * IS_AUTHENTICATED_FULLY method can be changed on requirement
         */
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        return $this->render('ClothstudioBundle:User:logout.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request) {

        /*
         * IS_AUTHENTICATED_FULLY method can be changed on requirement
         */
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('ClothstudioBundle:User:profile.html.twig', array(
                    'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/changepwd/{userid}", name="changepwd")
     */
    public function changePasswdAction($userid, Request $request) {
        /*
         * IS_AUTHENTICATED_FULLY method can be changed on requirement
         */
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $changePasswordModel = new ChangePassword();

        $form = $this->createForm(ChangePasswordType::class, $changePasswordModel);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $changePassword = $form->getData();

            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($changePassword->getUser());

            var_dump($encoder);
            $password = $encoder->encodePassword($changePassword->getUser()->getcPassword(), $changePassword->getUser()->getSalt());

            $changePassword->getUser()->setPassword($password);

            $em->persist($changePassword);
            $em->flush();

            return $this->redirect($this->generateUrl('change_password_success'));
        }
        return $this->render('ClothstudioBundle:User:mypassword.html.twig', array(
                    'form' => $form->createView(),
                    'userid' => $userid,
                    'userdata' => $user
        ));
    }

    /**
     * @Route("/mensignup", name="mensignup")
     */
    public function mensignupAction(Request $request) {
        return $this->render('ClothstudioBundle:User:model-men.html.twig', array(
                    'gender' => $request->request->get('gender')
        ));
    }

    /**
     * @Route("/womensignup", name="womensignup")
     */
    public function womensignupAction(Request $request) {
        return $this->render('ClothstudioBundle:User:model-women.html.twig', array(
                    'gender' => $request->request->get('gender')
        ));
    }

    /**
     * @Route("/signupnew", name="signupnew")
     */
    public function signupnewAction(Request $request) {
        if ($request->isMethod('POST')) {
            //do validation
            $customer = new Customer();
            $data = $request->request->get('customer');
            $customer->setCFirstName($data['cFirstName']);
            $customer->setCLastName($data['cFirstName']);
            $customer->setCPhone($data['cPhone']);
            $customer->setCZip($data['cZip']);
            $customer->setCEmail($data['cEmail']);
            $password = $this->get('security.password_encoder')
                    ->encodePassword($customer, $data['cPassword']);
            $customer->setCPassword($password);
            $customer->setCGender($data['cGender']);
            $customer->setCStatus('Active');
            $customer->setCIdeallySpentForCategories(serialize($data['cIdeallySpentForCategories']));
            if (isset($data['cLikeColorPalettes']))
                $customer->setCLikeColorPalettes(serialize($data['cLikeColorPalettes']));
            if (isset($data['cLikeStyles']))
                $customer->setCLikeStyles(serialize($data['cLikeStyles']));
            if (isset($data['cBodyShape']))
                $customer->setCBodyShape(serialize($data['cBodyShape']));
            if (isset($data['cBraSize']))
                $customer->setCBraSize(serialize($data['cBraSize']));
            if (isset($data['cDressSize']))
                $customer->setCDressSize(serialize($data['cDressSize']));
            $customer->setCShoesSize(serialize($data['cShoesSize']));
            $customer->setCWaistSize(serialize($data['cWaistSize']));
            $customer->setCPantSize(serialize($data['cPantSize']));
            $customer->setCTopSize(serialize($data['cTopSize']));
            $customer->setCWeight(serialize($data['cWeight']));
            $customer->setCHeight(serialize($data['cHeight']));
            $customer->setCCreatedDate(new \DateTime("now"));
            $customer->setCModifiedDate(new \DateTime("now"));
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
            $token = new UsernamePasswordToken($customer, null, 'main', $customer->getRoles());
            $this->get('security.token_storage')->setToken($token);
            return $this->redirectToRoute('profile');
        }
    }

    /**
     * @Route("/account", name="account")
     */
    public function accountAction(Request $request) {
        /*
         * IS_AUTHENTICATED_FULLY method can be changed on requirement
         */
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        return $this->render('ClothstudioBundle:User:account.html.twig', array(
                    'user' => $this->getUser(),
        ));
    }

}
