<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Line
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
     * @var int
     *
     * @ORM\Column(name="idrefliga",type="integer")
     */
    protected $idRefLiga;

    /**
     * @var string
     *
     * @ORM\Column(name="idrefligc", type="string")
     */
    protected $idRefLigc;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $ligne;

    /**
     * @var string
     *
     * @ORM\Column(name="codligf", type="string")
     */
    protected $codLigf;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $ligneCode;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $indiceLig;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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

