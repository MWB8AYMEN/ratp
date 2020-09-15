<?php

namespace App\Service;

use App\Entity\Line;
use App\Entity\Location;
use App\Entity\Network;
use App\Entity\Terminal;
use App\ValueObject\Import\Line as LineDTO;
use App\ValueObject\Import\Location as LocationDTO;
use App\ValueObject\Import\Network as NetworkDTO;
use App\ValueObject\Import\Terminal as TerminalDTO;
use Doctrine\ORM\EntityManagerInterface;

class DataImporter
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param LocationDTO $location
     * @return Location
     */
    public function persistDataLocation(LocationDTO $location)
    {
        $locationRepository = $this->em->getRepository(Location::class);
        $locationEntity = $locationRepository->findOneByGeoPoint($location->getGeoPoint());
        if (!$locationEntity) {
            $locationEntity = new Location();
        }

        $locationEntity->setFer($location->getFer())
            ->setGaresId($location->getGaresId())
            ->setGeoPoint($location->getGeoPoint())
            ->setGeoShape($location->getGeoShape())
            ->setIdRefZdl($location->getIdRefZdl())
            ->setMetro($location->getMetro())
            ->setMode($location->getMode())
            ->setNavette($location->getNavette())
            ->setNomGare($location->getNomGare())
            ->setNomIv($location->getNomIv())
            ->setNomlong($location->getNomlong())
            ->setNumMod($location->getNumMod())
            ->setObjectId($location->getObjectId())
            ->setTrain($location->getTrain())
            ->setTramway($location->getTramway())
            ->setRer($location->getRer())
            ->setVal($location->getVal());
        $this->em->persist($locationEntity);

        return $locationEntity;

    }

    /**
     * @param TerminalDTO $terminal
     * @param Location $location
     */
    public function persistDataTerminal(TerminalDTO $terminal, Location $location)
    {
        $terminalRepository = $this->em->getRepository(Terminal::class);
        $terminalEntity = $terminalRepository->findOneByLocation($location);
        if (!$terminalEntity) {
            $terminalEntity = new Terminal();
        }

        $terminalEntity->setTerfer($terminal->getTerfer())
            ->setTermetro($terminal->getTermetro())
            ->setTernavette($terminal->getTernavette())
            ->setTerrer($terminal->getTerrer())
            ->setTertrain($terminal->getTertrain())
            ->setTertram($terminal->getTertram())
            ->setTerval($terminal->getTerval())
            ->setLocation($location);

        $this->em->persist($terminalEntity);

    }

    /**
     * @param LineDTO $line
     * @param Location $location
     */
    public function persistDataLine(LineDTO $line, Location $location)
    {
        $lineRepository = $this->em->getRepository(Line::class);
        $lineEntity = $lineRepository->findOneByLocation($location);
        if (!$lineEntity) {
            $lineEntity = new Line();
        }

        $lineEntity->setCodLigf($line->getCodLigf())
            ->setIdRefLiga($line->getIdRefLiga())
            ->setIdRefLigc($line->getIdRefLigc())
            ->setIndiceLig($line->getIndiceLig())
            ->setLigne($line->getLigne())
            ->setLigneCode($line->getLigneCode())
            ->setLocation($location);

        $this->em->persist($lineEntity);
    }

    /**
     * @param NetworkDTO $network
     * @param Location $location
     */
    public function persistDataNetwork(NetworkDTO $network, Location $location)
    {
        $networkRepository = $this->em->getRepository(Network::class);
        $networkEntity = $networkRepository->findOneByLocation($location);
        if (!$networkEntity) {
            $networkEntity = new Network();
        }

        $networkEntity->setAbsc($network->getAbsc())
            ->setCodResf($network->getCodResf())
            ->setExploitant($network->getExploitant())
            ->setIdf($network->getIdf())
            ->setNetwork($network->getNetwork())
            ->setOrd($network->getOrd())
            ->setNumPsr($network->getNumPsr())
            ->setPrincipal($network->getPrincipal())
            ->setResCom($network->getResCom())
            ->setResStif($network->getResStif())
            ->setLocation($location);

        $this->em->persist($networkEntity);
    }

    public function save()
    {
        $this->em->flush();
    }
}