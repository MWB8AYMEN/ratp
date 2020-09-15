<?php
namespace App\ValueObject\Import;

class Location implements LocationInterface
{
    /**
     * @var string
     */
    protected $geoPoint;

    /**
     * @var array
     */
    protected $geoShape;

    /**
     * @var float
     *
     */
    protected $objectId;

    /**
     * @var int
     */
    protected $idRefZdl;

    /**
     * @var int
     */
    protected $garesId;

    /**
     * @var string
     */
    protected $nomGare;

    /**
     * @var string
     */
    protected $nomlong;

    /**
     * @var string
     */
    protected $nomIv;

    /**
     * @var string
     */
    protected $numMod;

    /**
     * @var int
     */
    protected $mode;

    /**
     * @var string
     */
    protected $fer;

    /**
     * @var int
     */
    protected $train;

    /**
     * @var int
     */
    protected $rer;

    /**
     * @var int
     */
    protected $metro;

    /**
     * @var int
     */
    protected $tramway;

    /**
     * @var int
     */
    protected $navette;

    /**
     * @var int
     */
    protected $val;

    public function __construct(array $row)
    {
        [
            $this->geoPoint,
            $this->geoShape,
            $this->objectId,
            $this->idRefZdl,
            $this->garesId,
            $this->nomGare,
            $this->nomlong,
            $this->nomIv,
            $this->numMod,
            $this->mode,
            $this->fer,
            $this->train,
            $this->rer,
            $this->metro,
            $this->tramway,
            $this->navette,
            $this->val
        ] = $row;
    }

    /**
     * @return float
     */
    public function getGeoPoint()
    {
        return $this->geoPoint;
    }

    /**
     * @param string $geoPoint
     */
    public function setGeoPoint($geoPoint)
    {
        $this->geoPoint = $geoPoint;

        return $this;
    }

    /**
     * @return array
     */
    public function getGeoShape()
    {
        return $this->geoShape;
    }

    /**
     * @param array $geoShape
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
     * @return \App\Entity\Location|$this
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
        return $this->mode;
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
