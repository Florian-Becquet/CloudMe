<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191127104434 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE facture ADD id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641079F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FE86641079F37AE5 ON facture (id_user_id)');
        $this->addSql('ALTER TABLE subscription ADD id_user_id INT NOT NULL, ADD id_services_id INT NOT NULL');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D379F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subscription ADD CONSTRAINT FK_A3C664D3B6E76B36 FOREIGN KEY (id_services_id) REFERENCES services (id)');
        $this->addSql('CREATE INDEX IDX_A3C664D379F37AE5 ON subscription (id_user_id)');
        $this->addSql('CREATE INDEX IDX_A3C664D3B6E76B36 ON subscription (id_services_id)');
        $this->addSql('ALTER TABLE user ADD id_tva_id INT DEFAULT NULL, ADD name VARCHAR(255) NOT NULL, ADD first_name VARCHAR(255) NOT NULL, ADD num_siret VARCHAR(255) DEFAULT NULL, ADD date_inscription DATE NOT NULL, ADD date_fin DATE DEFAULT NULL, ADD forme_juridique VARCHAR(255) NOT NULL, ADD pays VARCHAR(255) NOT NULL, ADD code_postal VARCHAR(255) NOT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD numero_tel VARCHAR(255) DEFAULT NULL, ADD society_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496B4EC2B2 FOREIGN KEY (id_tva_id) REFERENCES tva (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6496B4EC2B2 ON user (id_tva_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641079F37AE5');
        $this->addSql('DROP INDEX IDX_FE86641079F37AE5 ON facture');
        $this->addSql('ALTER TABLE facture DROP id_user_id');
        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D379F37AE5');
        $this->addSql('ALTER TABLE subscription DROP FOREIGN KEY FK_A3C664D3B6E76B36');
        $this->addSql('DROP INDEX IDX_A3C664D379F37AE5 ON subscription');
        $this->addSql('DROP INDEX IDX_A3C664D3B6E76B36 ON subscription');
        $this->addSql('ALTER TABLE subscription DROP id_user_id, DROP id_services_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496B4EC2B2');
        $this->addSql('DROP INDEX IDX_8D93D6496B4EC2B2 ON user');
        $this->addSql('ALTER TABLE user DROP id_tva_id, DROP name, DROP first_name, DROP num_siret, DROP date_inscription, DROP date_fin, DROP forme_juridique, DROP pays, DROP code_postal, DROP adresse, DROP ville, DROP numero_tel, DROP society_name');
    }
}
