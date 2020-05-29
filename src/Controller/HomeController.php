<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Pelicula;
use App\Entity\Comentario;
use App\Entity\Serie;
use App\Entity\User;
use App\Entity\Valoracion;
use App\Entity\Buscador;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class HomeController extends AbstractController
{

    public function inicio() {
        $entityManager = $this->getDoctrine()->getManager();
        $peliculas= $entityManager->getRepository(Pelicula::class)->findAll();
        $series= $entityManager->getRepository(Serie::class)->findAll();
        return $this->render('home/index.html.twig', array(
            'peliculas' => $peliculas,
            'series' => $series,
        ));
    }

    public function pelicula(Request $request, $id) {
        $entityManager = $this->getDoctrine()->getManager();
        $pelicula= $entityManager->getRepository(Pelicula::class)->find($id);
        if (!$pelicula){
            throw $this->createNotFoundException(
            'No existe ninguna pelicula con id '.$id
            );
        }

        $comentario = new Comentario();
        $autores = $entityManager->getRepository(User::class)->findAll();

        $securityContext = $this->container->get('security.authorization_checker');
        
        $valoracion = new Valoracion();

        $form = $this->createFormBuilder($valoracion)
        ->add('valoracion', NumberType::class)
        ->add('save', SubmitType::class,
            array('label' => 'Añadir valoracion'))
        ->getForm();
        $form->handleRequest($request);

        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            if ($form->isSubmitted() && $form->isValid()) {
                $valoracion = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $valoracion->setFecha(new \DateTime('now'));
                $usuario = $this->getUser();
                foreach($autores as $autor){
                    if ($autor == $usuario) {
                        $valoracion->setAutor($autor);
                    }
                }
                $valoracion->setPelicula($pelicula);
                $valoracion->setSerie(null);
                $entityManager->persist($valoracion);
                $entityManager->flush();
                return $this->redirectToRoute('pelicula', array('id'=>$id));
            }
        }

        $form2 = $this->createFormBuilder($comentario)
            ->add('texto', TextareaType::class,
                array('label' => 'Comentario'))
            ->add('save', SubmitType::class,
                array('label' => 'Añadir comentario'))
            ->getForm();
            $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {
            $comentario = $form2->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $comentario->setFecha(new \DateTime('now'));
            if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
                $usuario = $this->getUser();
                foreach($autores as $autor){
                    if ($autor == $usuario) {
                        $comentario->setAutor($autor);
                    }
                }
            } else {
                $comentario->setAutor(null);
            }
            $comentario->setPelicula($pelicula);
            $entityManager->persist($comentario);
            $entityManager->flush();
            return $this->redirectToRoute('pelicula', array('id'=>$id));
        }

        return $this->render('proyecto/pelicula.html.twig', array('pelicula' => $pelicula, 'user' => $autores, 'form' => $form->createView(), 'form2' => $form2->createView(),));
    }

    public function peliculas(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        #---------------

        $buscador = new buscador();

        $form = $this->createFormBuilder($buscador)
        ->add('buscar', TextType::class)
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $buscador = $form->getData();
            $entityManager->persist($buscador);
            $entityManager->flush();
            return $this->redirectToRoute('buscadorPelis');
        }

        #-------------

        $peliculas= $entityManager->getRepository(Pelicula::class)->findAll();
        $user = $entityManager->getRepository(User::class)->findAll();
        
        return $this->render('proyecto/listaPeliculas.html.twig', array(
            'peliculas' => $peliculas,
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    public function series(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        #---------------

        $buscador = new buscador();

        $form = $this->createFormBuilder($buscador)
        ->add('buscar', TextType::class)
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $buscador = $form->getData();
            $entityManager->persist($buscador);
            $entityManager->flush();
            return $this->redirectToRoute('buscadorSeries');
        }

        #-------------

        $series= $entityManager->getRepository(Serie::class)->findAll();
        $user = $entityManager->getRepository(User::class)->findAll();

        return $this->render('proyecto/listaSeries.html.twig', array(
            'series' => $series,
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    public function serie(Request $request, $id) {
        $entityManager = $this->getDoctrine()->getManager();
        $serie= $entityManager->getRepository(Serie::class)->find($id);
        $user= $entityManager->getRepository(User::class)->findAll();
        if (!$serie){
            throw $this->createNotFoundException(
            'No existe ninguna serie con id '.$id
            );
        }

        $comentario = new Comentario();
        $autores = $entityManager->getRepository(User::class)->findAll();

        $securityContext = $this->container->get('security.authorization_checker');
        
        $valoracion = new Valoracion();

        $form = $this->createFormBuilder($valoracion)
        ->add('valoracion', NumberType::class)
        ->add('save', SubmitType::class,
            array('label' => 'Añadir valoracion'))
        ->getForm();
        $form->handleRequest($request);

        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            if ($form->isSubmitted() && $form->isValid()) {
                $valoracion = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $valoracion->setFecha(new \DateTime('now'));
                $usuario = $this->getUser();
                foreach($autores as $autor){
                    if ($autor == $usuario) {
                        $valoracion->setAutor($autor);
                    }
                }
                $valoracion->setPelicula(null);
                $valoracion->setSerie($serie);
                $entityManager->persist($valoracion);
                $entityManager->flush();
                return $this->redirectToRoute('serie', array('id'=>$id));
            }
        }

        $form2 = $this->createFormBuilder($comentario)
            ->add('texto', TextareaType::class,
                array('label' => 'Comentario'))
            ->add('save', SubmitType::class,
                array('label' => 'Añadir comentario'))
            ->getForm();
            $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {
            $comentario = $form2->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $comentario->setFecha(new \DateTime('now'));
            if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
                $usuario = $this->getUser();
                foreach($autores as $autor){
                    if ($autor == $usuario) {
                        $comentario->setAutor($autor);
                    }
                }
            } else {
                $comentario->setAutor(null);
            }
            $comentario->setSerie($serie);
            $entityManager->persist($comentario);
            $entityManager->flush();
            return $this->redirectToRoute('serie', array('id'=>$id));
        }

        return $this->render('proyecto/serie.html.twig', array('serie' => $serie, 'user' => $user, 'form' => $form->createView(), 'form2' => $form2->createView(),));
    }

    public function peliculaNueva(Request $request) {
        $pelicula = new Pelicula();
        $form = $this->createFormBuilder($pelicula)
            ->add('titulo', TextType::class)
            ->add('resumen', TextareaType::class)
            ->add('director', TextType::class)
            ->add('actores', TextType::class)
            ->add('escritores', TextType::class)
            ->add('duracion', NumberType::class)
            ->add('edad', NumberType::class)
            ->add('genero', TextType::class)
            ->add('fechaSalida', DateType::class)
            ->add('save', SubmitType::class,
                array('label' => 'Añadir pelicula'))
            ->getForm();

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $pelicula = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pelicula);
            $entityManager->flush();
            return $this->redirectToRoute('peliculas');
        }

        return $this->render('proyecto/peliculaNueva.html.twig', array('form' => $form->createView(),));
    }

    public function serieNueva(Request $request) {
        $serie = new Serie();
        $form = $this->createFormBuilder($serie)
            ->add('titulo', TextType::class)
            ->add('resumen', TextareaType::class)
            ->add('temporadas', NumberType::class)
            ->add('capitulos', NumberType::class)
            ->add('genero', TextType::class)
            ->add('actores', TextType::class)
            ->add('save', SubmitType::class,
                array('label' => 'Añadir serie'))
            ->getForm();

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $serie = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($serie);
            $entityManager->flush();
            return $this->redirectToRoute('series');
        }

        return $this->render('proyecto/serieNueva.html.twig', array('form' => $form->createView(),));
    }

    public function borrarPelicula($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $pelicula= $entityManager->getRepository(Pelicula::class)->find($id);
        if (!$pelicula) {
            throw $this->createNotFoundException(
                'No existe ninguna pelicula con id '.$id
            );
        }
        $entityManager->remove($pelicula);
        $entityManager->flush();
        return $this->render('proyecto/peliculaBorrada.html.twig', array('pelicula' => $pelicula));
    }

    public function borrarSerie($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $serie= $entityManager->getRepository(Serie::class)->find($id);
        if (!$serie) {
            throw $this->createNotFoundException(
                'No existe ninguna serie con id '.$id
            );
        }
        $entityManager->remove($serie);
        $entityManager->flush();
        return $this->render('proyecto/serieBorrada.html.twig', array('serie' => $serie));
    }

    public function editarPelicula(Request $request, $id) {
        $entityManager = $this->getDoctrine()->getManager();
        $pelicula = $entityManager->getRepository(Pelicula::class)->find($id);
        if (!$pelicula) {
            throw $this->createNotFoundException(
                'No existe ninguna pelicula con id '.$id
            );
        }
        $form = $this->createFormBuilder($pelicula)
            ->add('titulo', TextType::class)
            ->add('resumen', TextareaType::class)
            ->add('director', TextType::class)
            ->add('actores', TextType::class)
            ->add('escritores', TextType::class)
            ->add('duracion', NumberType::class)
            ->add('edad', NumberType::class)
            ->add('genero', TextType::class)
            ->add('fechaSalida', DateType::class)
            ->add('save', SubmitType::class,
                array('label' => 'Actualizar pelicula'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pelicula = $form->getData();
            $entityManager->flush();
            return $this->redirectToRoute('pelicula', array('id'=>$id));
        }
        return $this->render('proyecto/peliculaActualizada.html.twig', array(
            'pelicula' => $pelicula,
            'form' => $form->createView(),
        ));
    }

    public function editarSerie(Request $request, $id) {
        $entityManager = $this->getDoctrine()->getManager();
        $serie = $entityManager->getRepository(Serie::class)->find($id);
        if (!$serie) {
            throw $this->createNotFoundException(
                'No existe ninguna serie con id '.$id
            );
        }
        $form = $this->createFormBuilder($serie)
            ->add('titulo', TextType::class)
            ->add('resumen', TextareaType::class)
            ->add('temporadas', NumberType::class)
            ->add('capitulos', NumberType::class)
            ->add('genero', TextType::class)
            ->add('actores', TextType::class)
            ->add('save', SubmitType::class,
                array('label' => 'Añadir serie'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $serie = $form->getData();
            $entityManager->flush();
            return $this->redirectToRoute('serie', array('id'=>$id));
        }
        return $this->render('proyecto/serieActualizada.html.twig', array(
            'serie' => $serie,
            'form' => $form->createView(),
        ));
    }

    
    # Crear PDF

    public function descargarPDFPeli($id) {

        $entityManager = $this->getDoctrine()->getManager();

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $pelicula= $entityManager->getRepository(Pelicula::class)->find($id);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('proyecto/pelipdf.html.twig', [
            "pelicula" => $pelicula,
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream($pelicula->getTitulo().".pdf", [
            "Attachment" => true
        ]);
    }

    public function descargarPDFSerie($id) {

        $entityManager = $this->getDoctrine()->getManager();

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $serie= $entityManager->getRepository(Serie::class)->find($id);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('proyecto/seriepdf.html.twig', [
            "serie" => $serie,
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream($serie->getTitulo().".pdf", [
            "Attachment" => true
        ]);
    }

    public function buscadorPelicula(Request $request) {

        $entityManager = $this->getDoctrine()->getManager();

        $buscados = $entityManager->getRepository(Buscador::class)->findAll();
        $buscador = new Buscador();

        $form = $this->createFormBuilder($buscador)
        ->add('Buscar', TextType::class)
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $buscador = $form->getData();
            $entityManager->persist($buscador);
            $entityManager->flush();
            return $this->redirectToRoute('buscadorPelis');
        }

        foreach($buscados as $search){
                $buscar = $search->getBuscar();
        }
        
        $repository = $entityManager->getRepository(Pelicula::class);

        $query = $repository->createQueryBuilder('p')
            ->andWhere('p.Titulo LIKE :Titulo')
            ->setParameter('Titulo', '%'.$buscar.'%')
            ->orderBy('p.Titulo', 'ASC')
            ->getQuery();

        $peliculas = $query->getResult();

        return $this->render('proyecto/peliculasBuscadas.html.twig', array(
            'peliculas' => $peliculas,
            'search' => $search,
            'form' => $form->createView(),
        ));
    }

    public function buscadorSerie(Request $request) {

        $entityManager = $this->getDoctrine()->getManager();

        $buscados = $entityManager->getRepository(Buscador::class)->findAll();
        $buscador = new Buscador();

        $form = $this->createFormBuilder($buscador)
        ->add('Buscar', TextType::class)
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $buscador = $form->getData();
            $entityManager->persist($buscador);
            $entityManager->flush();
            return $this->redirectToRoute('buscadorSeries');
        }

        foreach($buscados as $search){
                $buscar = $search->getBuscar();
        }
        
        $repository = $entityManager->getRepository(Serie::class);

        $query = $repository->createQueryBuilder('p')
            ->andWhere('p.Titulo LIKE :Titulo')
            ->setParameter('Titulo', '%'.$buscar.'%')
            ->orderBy('p.Titulo', 'ASC')
            ->getQuery();

        $series = $query->getResult();

        return $this->render('proyecto/seriesBuscadas.html.twig', array(
            'series' => $series,
            'search' => $search,
            'form' => $form->createView(),
        ));
    }

}
