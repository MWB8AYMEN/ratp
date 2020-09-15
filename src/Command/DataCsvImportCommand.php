<?php

namespace App\Command;



use App\Service\DataImporter;
use App\ValueObject\Import\Location as LocationDTO;
use App\ValueObject\Import\Line as LineDTO;
use App\ValueObject\Import\Network as NetworkDTO;
use App\ValueObject\Import\Terminal as TerminalDTO;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DataCsvImportCommand extends Command
{
    /**
     * @var DataImporter
     */
    private $dataImporter;

    protected static $defaultName = 'data:csv-import';

    /**
     * DataCsvImportCommand constructor.
     * @param DataImporter $dataImporter
     */
    public function __construct(DataImporter $dataImporter)
    {
        parent::__construct();
        $this->dataImporter = $dataImporter;
    }

    protected function configure()
    {
        $this
            ->setDescription('import data from csv file')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $reader = new Csv();
        $reader->setReadDataOnly(true);
        $spreadSheet = $reader->load('data/exports-des-gares-idf.csv');
        $worksheets = $spreadSheet->getAllSheets();

         $rows = $worksheets[0]->toArray();
         unset($rows[0]);
        foreach ($rows as $rowKey => $rowValues) {
            $location = array_slice($rowValues,0,17);
            $terminal = array_slice($rowValues,18,6);
            $line = array_slice($rowValues,24,6);

            $network = array_slice($rowValues,30,10);

            $locationDTO = new LocationDTO($location);
            $terminalDTO = new TerminalDTO($terminal);
            $lineDTO = new LineDTO($line);
            $networkDto = new NetworkDTO($network);

            $locationEntity = $this->dataImporter->persistDataLocation($locationDTO);
            $this->dataImporter->persistDataTerminal($terminalDTO, $locationEntity);
            $this->dataImporter->persistDataline($lineDTO, $locationEntity);
            $this->dataImporter->persistDataNetwork($networkDto, $locationEntity);
            $this->dataImporter->save();

        }
    }

}