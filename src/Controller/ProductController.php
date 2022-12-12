<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Service\PriceConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    #[Route('/', name: 'app_home')]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }

    #[Route('/product/{id}', name: 'app_product_details')]
    public function show(Product $product, PriceConverter $priceConverter): Response
    {
        $dollarPrice = $priceConverter->convertEurToDollar($product->getPrice());
        $yenPrice = $priceConverter->convertEurToYen($product->getPrice());

        return $this->render('product/details.html.twig', [
            'product' => $product,
            'dollar_price' => $dollarPrice,
            'yen_price' => $yenPrice,
        ]);
    }
}
