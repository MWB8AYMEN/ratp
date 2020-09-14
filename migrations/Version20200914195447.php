<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200914195447 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE terminal (id INT AUTO_INCREMENT NOT NULL, terfer INT NOT NULL, tertrain INT NOT NULL, terrer INT NOT NULL, termetro INT NOT NULL, tertram VARCHAR(255) NOT NULL, ternavette INT NOT NULL, terval INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE network (id INT AUTO_INCREMENT NOT NULL, network VARCHAR(255) NOT NULL, res_com VARCHAR(255) NOT NULL, cod_resf VARCHAR(255) NOT NULL, res_stif INT NOT NULL, exploitant INT NOT NULL, num_psr VARCHAR(255) NOT NULL, idf INT NOT NULL, principal INT NOT NULL, absc DOUBLE PRECISION NOT NULL, ord DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, geo_point DOUBLE PRECISION NOT NULL, geo_shape DOUBLE PRECISION NOT NULL, object_id LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', id_ref_zdl INT NOT NULL, gares_id INT NOT NULL, nom_gare VARCHAR(255) NOT NULL, nomlong VARCHAR(255) NOT NULL, nom_iv VARCHAR(255) NOT NULL, num_mod VARCHAR(255) NOT NULL, mode_ INT NOT NULL, fer VARCHAR(255) NOT NULL, train INT NOT NULL, rer INT NOT NULL, metro INT NOT NULL, tramway INT NOT NULL, navette INT NOT NULL, val INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE line (id INT AUTO_INCREMENT NOT NULL, idrefliga INT NOT NULL, idrefligc VARCHAR(255) NOT NULL, ligne VARCHAR(255) NOT NULL, codligf VARCHAR(255) NOT NULL, ligne_code INT NOT NULL, indice_lig VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE line');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE network');
        $this->addSql('DROP TABLE terminal');
    }
}
