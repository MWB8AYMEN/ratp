<?php
namespace App\ValueObject\Import;

class Line implements  LineInterface
{
    /**
     * @var int
     */
    protected $idRefLiga;

    /**
     * @var string
     */
    protected $idRefLigc;

    /**
     * @var string
     */
    protected $ligne;

    /**
     * @var string
     */
    protected $codLigf;

    /**
     * @var int
     */
    protected $ligneCode;

    /**
     * @var string
     */
    protected $indiceLig;

    public function __construct(array $row)
    {
        [
            $this->idRefLiga,
            $this->idRefLigc,
            $this->ligne,
            $this->codLigf,
            $this->ligneCode,
            $this->indiceLig
        ] = $row;
    }

    /**
     * @return int
     */
    public function getIdRefLiga()
    {
        return $this->idRefLiga;
    }

    /**
     * @param int $idRefLiga
     *
     * @return self|$this
     */
    public function setIdRefLiga($idRefLiga)
    {
        $this->idRefLiga = $idRefLiga;

        return $this;
    }


    /**
     * @return string
     */
    public function getIdRefLigc()
    {
        return $this->idRefLigc;
    }

    /**
     * @param string $idRefLigc
     *
     * @return self|$this
     */
    public function setIdRefLigc($idRefLigc)
    {
        $this->idRefLigc = $idRefLigc;

        return $this;
    }

    /**
     * @return string
     */
    public function getLigne()
    {
        return $this->ligne;
    }

    /**
     * @param string $ligne
     *
     * @return self|$this
     */
    public function setLigne($ligne)
    {
        $this->ligne = $ligne;

        return $this;
    }

    /**
     * @return string
     */
    public function getCodLigf()
    {
        return $this->codLigf;
    }

    /**
     * @param string $codLigf
     *
     * @return self|$this
     */
    public function setCodLigf($codLigf)
    {
        $this->codLigf = $codLigf;

        return $this;
    }

    /**
     * @return int
     */
    public function getLigneCode()
    {
        return $this->ligneCode;
    }

    /**
     * @param int $ligneCode
     *
     * @return self|$this
     */
    public function setLigneCode($ligneCode)
    {
        $this->ligneCode = $ligneCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getIndiceLig()
    {
        return $this->indiceLig;
    }

    /**
     * @param string $indiceLig
     *
     * @return self|$this
     */
    public function setIndiceLig($indiceLig)
    {
        $this->indiceLig = $indiceLig;

        return $this;
    }

}