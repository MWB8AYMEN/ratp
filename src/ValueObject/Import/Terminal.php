<?php
namespace App\ValueObject\Import;

class Terminal implements TerminalInterface
{
    /**
     * @var int
     */
    protected $terfer;

    /**
     * @var int
     */
    protected $tertrain;

    /**
     * @var int
     */
    protected $terrer;

    /**
     * @var int
     */
    protected $termetro;

    /**
     * @var string
     */
    protected $tertram;

    /**
     * @var int
     */
    protected $ternavette;

    /**
     * @var int
     */
    protected $terval;

    public function __construct(array $row)
    {
        [
            $this->terfer,
            $this->tertrain,
            $this->terrer,
            $this->termetro,
            $this->tertram,
            $this->ternavette
        ] = $row;
    }

    /**
     * @return int
     */
    public function getTerfer()
    {
        return $this->terfer;
    }

    /**
     * @param int $terfer
     *
     * @return self|$this
     */
    public function setTerfer($terfer)
    {
        $this->terfer = $terfer;

        return $this;
    }

    /**
     * @return int
     */
    public function getTertrain()
    {
        return $this->tertrain;
    }

    /**
     * @param int $tertrain
     *
     * @return self|$this
     */
    public function setTertrain($tertrain)
    {
        $this->tertrain = $tertrain;

        return $this;
    }

    /**
     * @return int
     */
    public function getTerrer()
    {
        return $this->terrer;
    }

    /**
     * @param int $terrer
     *
     * @return self|$this
     */
    public function setTerrer($terrer)
    {
        $this->terrer = $terrer;

        return $this;
    }

    /**
     * @return int
     */
    public function getTermetro()
    {
        return $this->termetro;
    }

    /**
     * @param int $termetro
     *
     * @return self|$this
     */
    public function setTermetro($termetro)
    {
        $this->termetro = $termetro;

        return $this;
    }

    /**
     * @return string
     */
    public function getTertram()
    {
        return $this->tertram;
    }

    /**
     * @param string $tertram
     *
     * @return self|$this
     */
    public function setTertram($tertram)
    {
        $this->tertram = $tertram;

        return $this;
    }

    /**
     * @return int
     */
    public function getTernavette()
    {
        return $this->ternavette;
    }

    /**
     * @param int $ternavette
     *
     * @return self|$this
     */
    public function setTernavette($ternavette)
    {
        $this->ternavette = $ternavette;

        return $this;
    }

    /**
     * @return int
     */
    public function getTerval()
    {
        return $this->terval;
    }

    /**
     * @param int $terval
     *
     * @return self|$this
     */
    public function setTerval($terval)
    {
        $this->terval = $terval;

        return $this;
    }

}
