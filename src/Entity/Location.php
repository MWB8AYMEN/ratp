<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $geoPoint;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $geoShape;

    /**
     * @var float
     *
     * @ORM\Column(type="array")
     *
     */
    protected $objectId;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $idRefZdl;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $garesId;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $nomGare;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $nomlong;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $nomIv;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $numMod;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $mode_;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $fer;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $train;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $rer;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $metro;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $tramway;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $navette;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $val;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getGeoPoint()
    {
        return $this->geoPoint;
    }

    /**
     * @param float $geoPoint
     */
    public function setGeoPoint($geoPoint)
    {
        $this->geoPoint = $geoPoint;

        return $this;
    }

    /**
     * @return float
     */
    public function getGeoShape()
    {
        return $this->geoShape;
    }

    /**
     * @param float $geoShape
     */
    public function setGeoShape($geoShape)
    {
        $this->geoShape = $geoShape;

        return $this;
    }

    /**
     * @return float
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param float $objectId
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return float
     */
    public function getIdRefZdl()
    {
        return $this->idRefZdl;
    }

    /**
     * @param float $idRefZdl
     */
    public function setIdRefZdl($idRefZdl)
    {
        $this->idRefZdl = $idRefZdl;

        return $this;
    }

    /**
     * @return int
     */
    public function getGaresId(): int
    {
        return $this->garesId;
    }

    /**
     * @param int $garesId
     */
    public function setGaresId($garesId)
    {
        $this->garesId = $garesId;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomGare()
    {
        return $this->nomGare;
    }

    /**
     * @param string $nomGare
     */
    public function setNomGare($nomGare)
    {
        $this->nomGare = $nomGare;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomlong()
    {
        return $this->nomlong;
    }

    /**
     * @param string $nomlong
     *
     * @return self|$this
     */
    public function setNomlong($nomlong)
    {
        $this->nomlong = $nomlong;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomIv()
    {
        return $this->nomIv;
    }

    /**
     * @param string $nomIv
     *
     * @return self|$this
     */
    public function setNomIv($nomIv)
    {
        $this->nomIv = $nomIv;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumMod()
    {
        return $this->numMod;
    }

    /**
     * @param string $numMod
     *
     * @return self|$this
     */
    public function setNumMod($numMod)
    {
        $this->numMod = $numMod;

        return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode_;
    }

    /**
     * @param int $mode
     *
     * @return self|$this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFer(): string
    {
        return $this->fer;
    }

    /**
     * @param string $fer
     *
     * @return self|$this
     */
    public function setFer($fer)
    {
        $this->fer = $fer;

        return $this;
    }

    /**
     * @return int
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * @param int $train
     *
     * @return self|$this
     */
    public function setTrain($train)
    {
        $this->train = $train;

        return $this;
    }

    /**
     * @return int
     */
    public function getRer()
    {
        return $this->rer;
    }

    /**
     * @param int $rer
     *
     * @return self|$this
     */
    public function setRer($rer)
    {
        $this->rer = $rer;

        return $this;
    }

    /**
     * @return int
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * @param int $metro
     *
     * @return self|$this
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;

        return $this;
    }

    /**
     * @return int
     */
    public function getTramway()
    {
        return $this->tramway;
    }

    /**
     * @param int $tramway
     *
     * @return self|$this
     */
    public function setTramway($tramway)
    {
        $this->tramway = $tramway;

        return $this;
    }

    /**
     * @return int
     */
    public function getNavette()
    {
        return $this->navette;
    }

    /**
     * @param int $navette
     *
     * @return self|$this
     */
    public function setNavette($navette)
    {
        $this->navette = $navette;

        return $this;
    }

    /**
     * @return int
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * @param int $val
     *
     * @return self|$this
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

}





