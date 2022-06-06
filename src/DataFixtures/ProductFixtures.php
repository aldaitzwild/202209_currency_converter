<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $products = [
            [
                'name' => 'Izuki Midoriya Stealth Suit Ver.',
                'description' => 'Nendoroid de Izuku Midoriya de My Hero Academia version Stealth Suit.
                Le heros de la serie est fourni avec 3 visages, plusieurs mains, 1 effet SMASH, 1 effet electrique et 1 socle avec bras articulé.',
                'price' => 64.90,
                'brand' => 'Nendoroid',
                'height' => 10,
                'imageUrl' => 'https://www.figurine-collector.fr/75133-thickbox_default/nendoroid-my-hero-academia-nendoroid-izuki-midoriya-stealth-suit-ver-10cm.jpg',
            ],

            [
                'name' => 'John Blacksad (Chat)',
                'description' => 'John Blacksad d\'après le personnage de la bande dessinée "Blacksad" de Guarnido & Diaz Canales.
                Voici une tres belle version du celebre Detective sur sa moto en resine et metal mesurant environ 18cm.
                Les rayons des roues sont en metal.',
                'price' => 310,
                'brand' => 'Attakus',
                'height' => 18,
                'imageUrl' => 'https://www.figurine-collector.fr/60806-thickbox_default/attakus-blacksad-john-blacksad-sur-sa-moto-18cm.jpg',
            ],
            [
                'name' => 'Dragon Ball Z series 1/4 Cell statue',
                'description' => 'Infinity Studio nous propose une nouvelle piece sur DBZ au format 1/4 avec un des plus grand adversaire de la Team Z: CELL!
                Le moment culte ou Cell explique comment il a pu se regenerer grace aux cellules souches a l\'interieur de son cerveau est ici immortalisé en resine de superbe maniere.
                Du sculpt a la composition du diorama en passant par la mise en couleur super fidele tout dans cette statue est tres bien pensé.
                La base est equipée d\'un light up a leds.',
                'price' => 1499.90,
                'brand' => 'Infinity Studio',
                'height' => 75,
                'imageUrl' => 'https://www.figurine-collector.fr/64891-thickbox_default/infinity-studio-dragon-ball-z-serie-14-cell-statue-75cm.jpg',
            ],
            [
                'name' => 'The Mandalorian BDS Art Scale 1/10',
                'description' => 'Voici un Din Djarin pensé pour s\'assembler avec le Moff Gideon de maniere a creer un diorama de leur combat lors du season finale de la s2.
                Bien sur la statue BDS Art Scale au format 1/10eme pourra etre exposée seule.
                Elle represente le chasseur de prime en pose defensive armé de sa lance de Beskar pur.',
                'price' => 139.90,
                'brand' => 'Iron Studios',
                'height' => 10,
                'imageUrl' => 'https://www.figurine-collector.fr/57769-thickbox_default/iron-studios-the-mandalorian-bds-art-scale-110-star-wars.jpg',
            ],
            [
                'name' => 'Thomas Price POP UP PARADE',
                'description' => 'La gamme de statue pvc POP UP PARADE de GoodSmile s\'enrichie d\'une licence culte des 80ies, le plus celebre des animés sportifs (Jeanne n\'est pas loin derriere) : Olive et Tom, Captain Tsubasa!
                Voici le gardien de la New Team: Genzo Wakabayashi, Thomas Price dans nos contrées.
                Le S.G.G.K (Super Great Goal Keeper) est parfaitement representé ici avec une pose typique ou il s\'apprete a degager le ballon.',
                'price' => 42.90,
                'brand' => 'GoodSmile',
                'height' => 17,
                'imageUrl' => 'https://www.figurine-collector.fr/58289-thickbox_default/goodsmile-captain-tsubasa-olive-et-tom-pop-up-parade-genzo-wakabayashi-thomas-price-17cm.jpg',
            ],

            [
                'name' => 'THE BATMAN DELUXE VERSION Movie Masterpiece 1/6',
                'description' => 'Film evenement, le Batman de Matt Reeves nous presente les debuts du jeune Bruce Wayne, ses doutes et errances psychologiques, ce qui le construira en tant que Chevalier Noir.
                Hot Toys nous presente une exceptionnelle MMS du personnage, tête masquée ou non avec un excellent HS de Robert Pattinson, 3 expressions interchangeables, des yeux mobiles, bat-grappin, batarangs, 9 mains et d\'autres accessoires.
                C\'est la version DX incluant une base avec light up Leds.',
                'price' => 414.90,
                'brand' => 'Hot Toys',
                'height' => 31,
                'imageUrl' => 'https://www.figurine-collector.fr/70404-thickbox_default/hot-toys-the-batman-deluxe-version-movie-masterpiece-16-31cm.jpg',
            ],
        ];

        foreach($products as $productData) {
            $product = new Product();
            $product
                ->setName($productData['name'])
                ->setDescription($productData['description'])
                ->setPrice($productData['price'])
                ->setBrand($productData['brand'])
                ->setHeight($productData['height'])
                ->setImageUrl($productData['imageUrl'])
            ;

            $manager->persist($product);
        }

        $manager->flush();
    }
}
