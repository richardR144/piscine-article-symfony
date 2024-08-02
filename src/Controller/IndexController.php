<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//je créai une class IndexController L’AbstractController
// peut être utilisé pour étendre la classe de contrôleur,
//ce qui permet d’accéder à des utilitaires fréquemment utilisés
// tels que render() et redirectToRoute().
//-----------------------------------------------------
//Il fournit également l’utilitaire createNotFoundException(), utilisé
// pour renvoyer une réponse “page non trouvée" erreur 404
class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig');
    }
}

