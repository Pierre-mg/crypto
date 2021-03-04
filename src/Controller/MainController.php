<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\TestEntretienRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function test(TestEntretienRepository $test, EntityManagerInterface $manager): Response
    {
        //Récupération de toutes les entrées
        $allTest = $test->findAll();

        //Traitement du multiple de 2
        foreach ($allTest as $cryptoMoney) {
            if ($cryptoMoney->getMarketCap()%2 === 0) {
                $cryptoMoney->setMultipleOfTwo(true);
            }

            //Traitement du jour de la semaine
            $cryptoMoney->setDay(date_format(new \DateTime($cryptoMoney->getDateLancement()), 'l'));

            $manager->persist($cryptoMoney);
            $manager->flush();
        }

        //Traitement de l'ordre par volume
        $volumeDesc = $test->findByVolumeDesc();

        $i = 1;
        foreach ($volumeDesc as $cryptoMoney) {
            $cryptoMoney->setOrderByVolumeDesc($i);
            $i++;

            $manager->persist($cryptoMoney);
            $manager->flush();
        }
        
        //slugger
        $slugger = new AsciiSlugger();

        //Traitement du low & high
        foreach ($allTest as $cryptoMoney) {
 
        $html = file_get_contents('https://coinmarketcap.com/currencies/'.$slugger->slug($cryptoMoney->getLibelle()).'/');

        $string = strstr($html, 'High</th>');

        $array = explode('div', $string);

        $low = substr($array[1], 2, -12);
        $high = substr($array[3], 2, -2);
                    
        $cryptoMoney->setLow($low);
        $cryptoMoney->setHigh($high);

        $manager->persist($cryptoMoney);
        $manager->flush();

        }

     return $this->render('main/index.html.twig', ['allTest' => $allTest]);
    }

}


    
