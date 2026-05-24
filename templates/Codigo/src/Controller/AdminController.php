<?php

namespace App\Controller;

use App\Entity\MovimientoFinanciero;
use App\Repository\ArticuloRepository;
use App\Repository\CategoriaRepository;
use App\Repository\MovimientoFinancieroRepository;
use App\Repository\PedidoRepository;
use App\Repository\ProveedorRepository;
use App\Repository\UbicacionAlmacenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('', name: 'app_admin')]
    public function index(
        PedidoRepository $pedidoRepo,
        MovimientoFinancieroRepository $movRepo
    ): Response {
        return $this->render('admin/index.html.twig', [
            'hoy'              => $pedidoRepo->countAndSumHoy(),
            'pedidosLogistica' => count($pedidoRepo->findForLogistica()),
            'ventasPagadas'    => $pedidoRepo->sumPagados(),
            'pedidosVencidos'  => count($pedidoRepo->findOverduePending()),
            'ingresosMes'      => $movRepo->sumByTipoMes(MovimientoFinanciero::TIPO_INGRESO),
            'gastosMes'        => $movRepo->sumByTipoMes(MovimientoFinanciero::TIPO_EGRESO),
            'ultimosPedidos'      => $pedidoRepo->findRecent(6),
            'ultimosMovimientos' => $movRepo->findRecent(6),
        ]);
    }

    #[Route('/datos/maestros', name: 'admin_datos_maestros', methods: ['GET'])]
    public function datosMaestros(
        CategoriaRepository $categoriaRepository,
        ArticuloRepository $articuloRepository,
        ProveedorRepository $proveedorRepository,
        UbicacionAlmacenRepository $ubicacionRepository
    ): Response {
        return $this->render('admin/datos_maestros.html.twig', [
            'categorias' => $categoriaRepository->findBy([], ['nombre' => 'ASC']),
            'articulos' => $articuloRepository->findBy([], ['titulo' => 'ASC']),
            'proveedores' => $proveedorRepository->findBy([], ['nombre' => 'ASC']),
            'ubicaciones' => $ubicacionRepository->findBy([], ['pasillo' => 'ASC']),
        ]);
    }
}
