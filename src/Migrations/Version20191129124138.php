<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191129124138 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, price DOUBLE PRECISION NOT NULL, date_edition DATE NOT NULL, date_echeance DATE DEFAULT NULL, numero_facture VARCHAR(255) NOT NULL, INDEX IDX_FE86641079F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pricing (id INT AUTO_INCREMENT NOT NULL, price DOUBLE PRECISION NOT NULL, unit INT NOT NULL, categories VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, architecture VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, headline VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, os VARCHAR(255) NOT NULL, package VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, template VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, version VARCHAR(255) NOT NULL, available TINYINT(1) NOT NULL, service_type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subscription (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_services_id INT NOT NULL, cpu VARCHAR(11) NOT NULL, ram INT NOT NULL, disk_space INT NOT NULL, price DOUBLE PRECISION NOT NULL, remise DOUBLE PRECISION DEFAULT NULL, date_sub DATE NOT NULL, date_fin DATE DEFAULT NULL, INDEX IDX_A3C664D379F37AE5 (id_user_id), INDEX IDX_A3C664D3B6E76B36 (id_services_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tva (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, taux DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_tva_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, num_siret VARCHAR(255) DEFAULT NULL, date_inscription DATE NOT NULL, date_fin DATE DEFAULT NULL, forme_juridique VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, numero_tel VARCHAR(255) DEFAULT NULL, society_name VARCHAR(255) DEFAULT NULL, status TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D6496B4EC2B2 (id_tva_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641079F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D379F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D3B6E76B36 FOREIGN KEY (id_services_id) REFERENCES services (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496B4EC2B2 FOREIGN KEY (id_tva_id) REFERENCES tva (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D3B6E76B36');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496B4EC2B2');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641079F37AE5');
        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D379F37AE5');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE pricing');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE subscription');
        $this->addSql('DROP TABLE tva');
        $this->addSql('DROP TABLE user');
    }
}
