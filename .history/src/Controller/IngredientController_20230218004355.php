<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use App\Repository\IngredientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IngredientController extends AbstractController
{
    #[Route('/ingredient', name: 'app_ingredient')]
    public function index(IngredientRepository $repository, PaginatorInterface $paginator)
    : Response
    {
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );
        
        // permet de lister : dd($ingredients);

        return $this->render('pages/ingredient/index.html.twig', [
            'ingredients' => $repository->findAll()
        ]);
    }
}
