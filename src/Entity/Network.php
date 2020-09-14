<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Network
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
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $network;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $resCom;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $codResf;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $resStif;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $exploitant;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $numPsr;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $idf;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $principal;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $absc;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $ord;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param string $network
     *
     * @return self|$this
     */
    public function setNetwork($network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * @return string
     */
    public function getResCom()
    {
        return $this->resCom;
    }

    /**
     * @param string $resCom
     *
     * @return self|$this
     */
    public function setResCom($resCom)
    {
        $this->resCom = $resCom;

        return $this;
    }

    /**
     * @return string
     */
    public function getCodResf()
    {
        return $this->codResf;
    }

    /**
     * @param string $codResf
     *
     * @return self|$this
     */
    public function setCodResf($codResf)
    {
        $this->codResf = $codResf;

        return $this;
    }

    /**
     * @return int
     */
    public function getResStif()
    {
        return $this->resStif;
    }

    /**
     * @param int $resStif
     *
     * @return self|$this
     */
    public function setResStif($resStif)
    {
        $this->resStif = $resStif;

        return $this;
    }

    /**
     * @return int
     *
     * @return self|$this
     */
    public function getExploitant()
    {
        return $this->exploitant;

        return $this;
    }

    /**
     * @param int $exploitant
     *
     * @return self|$this
     */
    public function setExploitant($exploitant)
    {
        $this->exploitant = $exploitant;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumPsr()
    {
        return $this->numPsr;
    }

    /**
     * @param string $numPsr
     *
     * @return self|$this
     */
    public function setNumPsr($numPsr)
    {
        $this->numPsr = $numPsr;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdf()
    {
        return $this->idf;
    }

    /**
     * @param int $idf
     *
     * @return self|$this
     */
    public function setIdf($idf)
    {
        $this->idf = $idf;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * @param int $principal
     *
     * @return self|$this
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * @return float
     */
    public function getAbsc()
    {
        return $this->absc;
    }

    /**
     * @param float $absc
     *
     * @return self|$this
     */
    public function setAbsc($absc)
    {
        $this->absc = $absc;

        return $this;
    }

    /**
     * @return float
     */
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * @param float $ord
     *
     * @return self|$this
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

}

