<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//je créai une class articleController avec la route afin de trouver tous mes articles
//je créai aussi un ArticleRepository et sa variable "$" et retourne un render pour afficher la view
class ArticleController extends AbstractController {
    #[Route('/articles', name: 'articles')]
    public function articles(ArticleRepository $articleRepository) {
        return $this->render('page/list_articles.html.twig', ['articles' => $articleRepository->findAll()]);
    }
//là je créai une route pour afficher et trouver les articles par l'id
    #[Route('/article/{id}', name: 'articleById')]
    public function articleById(ArticleRepository $articleRepository, int $id) {
        return $this->render('page/show_article.html.twig', ['article' => $articleRepository->find($id)]);
    }
}
