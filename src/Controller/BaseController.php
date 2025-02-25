<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BaseController extends AbstractController
{
    #[Route('/base', name: 'app_base')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
        ]);
    }
    #[Route('/galerie', name: 'app_galerie')]
    public function galerie(): Response
    {
        return $this->render('base/galerie.html.twig', [
        ]);
    }
    #[Route('/article', name: 'app_article')]
    public function article(): Response
    {
        return $this->render('base/article.html.twig', [
        ]);
    }
    #[Route('/events', name: 'app_events')]
    public function events(): Response
    {
        return $this->render('base/events.html.twig', [
        ]);
    }
    #[Route('/shooting', name: 'app_shooting')]
    public function shooting(): Response
    {
        return $this->render('base/shooting.html.twig', [
        ]);
    }
    #[Route('/mariages-grossesses', name: 'app_mariage')]
    public function mariage(): Response
    {
        return $this->render('base/mariage.html.twig', [
        ]);
    }
    #[Route('/cse', name: 'app_cse')]
    public function cse(): Response
    {
        return $this->render('base/cse.html.twig', [
        ]);
    }
    #[Route('/immobilier', name: 'app_immobilier')]
    public function immobilier(): Response
    {
        return $this->render('base/immobilier.html.twig', [
        ]);
    }
    #[Route('/article1', name: 'app_article1')]
    public function article1(): Response
    {
        return $this->render('base/article1.html.twig', []);
    }
    
    #[Route('/article2', name: 'app_article2')]
    public function article2(): Response
    {
        return $this->render('base/article2.html.twig', []);
    }
    
    #[Route('/article3', name: 'app_article3')]
    public function article3(): Response
    {
        return $this->render('base/article3.html.twig', []);
    }
    
    #[Route('/article4', name: 'app_article4')]
    public function article4(): Response
    {
        return $this->render('base/article4.html.twig', []);
    }
    
    #[Route('/article5', name: 'app_article5')]
    public function article5(): Response
    {
        return $this->render('base/article5.html.twig', []);
    }
    
    #[Route('/article6', name: 'app_article6')]
    public function article6(): Response
    {
        return $this->render('base/article6.html.twig', []);
    }
    
    #[Route('/article7', name: 'app_article7')]
    public function article7(): Response
    {
        return $this->render('base/article7.html.twig', []);
    }
    
    #[Route('/article8', name: 'app_article8')]
    public function article8(): Response
    {
        return $this->render('base/article8.html.twig', []);
    }
    
    #[Route('/article9', name: 'app_article9')]
    public function article9(): Response
    {
        return $this->render('base/article9.html.twig', []);
    }
    
    #[Route('/article10', name: 'app_article10')]
    public function article10(): Response
    {
        return $this->render('base/article10.html.twig', []);
    }
    
    #[Route('/article11', name: 'app_article11')]
    public function article11(): Response
    {
        return $this->render('base/article11.html.twig', []);
    }
    
    #[Route('/article12', name: 'app_article12')]
    public function article12(): Response
    {
        return $this->render('base/article12.html.twig', []);
    }
    
    #[Route('/article13', name: 'app_article13')]
    public function article13(): Response
    {
        return $this->render('base/article13.html.twig', []);
    }
    
    #[Route('/article14', name: 'app_article14')]
    public function article14(): Response
    {
        return $this->render('base/article14.html.twig', []);
    }
    
    #[Route('/article15', name: 'app_article15')]
    public function article15(): Response
    {
        return $this->render('base/article15.html.twig', []);
    }
    
    #[Route('/article16', name: 'app_article16')]
    public function article16(): Response
    {
        return $this->render('base/article16.html.twig', []);
    }
    
    #[Route('/article17', name: 'app_article17')]
    public function article17(): Response
    {
        return $this->render('base/article17.html.twig', []);
    }
    
    #[Route('/article18', name: 'app_article18')]
    public function article18(): Response
    {
        return $this->render('base/article18.html.twig', []);
    }
    
    #[Route('/article19', name: 'app_article19')]
    public function article19(): Response
    {
        return $this->render('base/article19.html.twig', []);
    }
    
    #[Route('/article20', name: 'app_article20')]
    public function article20(): Response
    {
        return $this->render('base/article20.html.twig', []);
    }
    
    #[Route('/article21', name: 'app_article21')]
    public function article21(): Response
    {
        return $this->render('base/article21.html.twig', []);
    }
    
    #[Route('/article22', name: 'app_article22')]
    public function article22(): Response
    {
        return $this->render('base/article22.html.twig', []);
    }
    
    #[Route('/article23', name: 'app_article23')]
    public function article23(): Response
    {
        return $this->render('base/article23.html.twig', []);
    }
    
    #[Route('/article24', name: 'app_article24')]
    public function article24(): Response
    {
        return $this->render('base/article24.html.twig', []);
    }  
    
    #[Route('/paysage', name: 'app_paysage')]
    public function paysage(): Response
    {
        return $this->render('base/paysage.html.twig', []);
    }  

    #[Route('/arras', name: 'app_arras')]
    public function arras(): Response
    {
        return $this->render('base/arras.html.twig', []);
    }  

    #[Route('/etre_vivant', name: 'app_ev')]
    public function etreVivant(): Response
    {
        return $this->render('base/etre-vivant.html.twig', []);
    }  

    #[Route('/nature', name: 'app_nature')]
    public function nature(): Response
    {
        return $this->render('base/nature.html.twig', []);
    }  

    #[Route('/noir-et-blanc', name: 'app_b&w')]
    public function noirEtBlanc(): Response
    {
        return $this->render('base/noir-blanc.html.twig', []);
    }  
}
