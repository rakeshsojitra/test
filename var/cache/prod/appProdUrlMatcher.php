<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // 
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '');
            }

            return array (  '_controller' => 'ClothstudioBundle\\Controller\\DefaultController::indexAction',  '_route' => '',);
        }

        // clothstudio_user_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'clothstudio_user_index');
            }

            return array (  '_controller' => 'ClothstudioBundle\\Controller\\UserController::indexAction',  '_route' => 'clothstudio_user_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'ClothstudioBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'ClothstudioBundle\\Controller\\UserController::logoutAction',  '_route' => 'logout',);
            }

        }

        // profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'ClothstudioBundle\\Controller\\UserController::profileAction',  '_route' => 'profile',);
        }

        // changepwd
        if (0 === strpos($pathinfo, '/changepwd') && preg_match('#^/changepwd/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'changepwd')), array (  '_controller' => 'ClothstudioBundle\\Controller\\UserController::changePasswdAction',));
        }

        // signupnew
        if ($pathinfo === '/signupnew') {
            return array (  '_controller' => 'ClothstudioBundle\\Controller\\UserController::signupnewAction',  '_route' => 'signupnew',);
        }

        // account
        if ($pathinfo === '/account') {
            return array (  '_controller' => 'ClothstudioBundle\\Controller\\UserController::accountAction',  '_route' => 'account',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
