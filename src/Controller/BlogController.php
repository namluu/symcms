<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        $blogs = [
            [
                'id' => 1,
                'title' => 'Blog 1'
            ],
            [
                'id' => 2,
                'title' => 'Blog 2'
            ]
        ];

        return $this->render('blog/list.html.twig', [
            'blogs' => $blogs
        ]);
    }
}
