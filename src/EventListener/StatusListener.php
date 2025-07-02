<?php

namespace App\EventListener;

use App\Entity\User;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\Session\Session;

final class StatusListener
{
    private Security $security;
    private RouterInterface $router;
    private RequestStack $requestStack;

    public function __construct(Security $security, RouterInterface $router,RequestStack $requestStack)
    {
        $this->security = $security;
        $this->router = $router;
        $this->requestStack = $requestStack;
    }
    #[AsEventListener(event: KernelEvents::REQUEST)]
    public function onKernelRequest(RequestEvent $event): void
    {
       $user = $this->security->getUser();
       $session = $this->requestStack->getCurrentRequest()->getSession();
        // Si l'utilisateur n'est pas dans l'état requis, invalider la session

        if($user && method_exists($user, 'isState') && !$user->isState()){
            $session->invalidate();
            $session->getFlashBag()->add('error', 'Votre compte est désactivé. Veuillez contacter l\'administrateur.');
            $response = new RedirectResponse($this->router->generate('app_logout'));
            $event->setResponse($response);
            $event->stopPropagation();
        }
    }
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event): void
    {
        $user = $event->getAuthenticationToken()->getUser();

        $session = $this->requestStack->getCurrentRequest()->getSession();
        // Si l'utilisateur n'est pas dans l'état requis, invalider la session
        if ($user && method_exists($user, 'isState') && !$user->isState()) {
            $session->invalidate();
            $session->getFlashBag()->add('error', 'Votre compte est désactivé. Veuillez contacter l\'administrateur.');
            $response = new RedirectResponse($this->router->generate('app_login'));
            $event->setResponse($response);
            $event->stopPropagation();
        }
    }
}
