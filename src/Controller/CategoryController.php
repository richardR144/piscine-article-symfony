<?php

namespace App\Controller;



use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class  CategoryController extends AbstractController
{
    #[Route('/categories', name: 'categories')]
    public function categories(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
            return $this->render('category/categories.html.twig', ['categories' => $categories]);
    }

}


