<?php

namespace App\Command;


use PhpOffice\PhpSpreadsheet\Reader\Csv;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DataCsvImportCommand extends Command
{
    protected static $defaultName = 'data:csv-import';

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
        foreach ($rows as $rowKey => $rowValues) {
            dump($rowValues);
        }










        return 0;
    }
}