<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190610144519 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE alimentations ADD CONSTRAINT FK_CD56093C4827B9B2 FOREIGN KEY (marque_id) REFERENCES marques (id)');
        $this->addSql('ALTER TABLE alimentations ADD CONSTRAINT FK_CD56093CD2FD85F1 FOREIGN KEY (gamme_id) REFERENCES gammes (id)');
        $this->addSql('ALTER TABLE alimentations ADD CONSTRAINT FK_CD56093C2261105F FOREIGN KEY (aliment_type_id) REFERENCES alimentations_type (id)');
        $this->addSql('ALTER TABLE alimentations ADD CONSTRAINT FK_CD56093C8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        $this->addSql('CREATE INDEX IDX_CD56093C4827B9B2 ON alimentations (marque_id)');
        $this->addSql('CREATE INDEX IDX_CD56093CD2FD85F1 ON alimentations (gamme_id)');
        $this->addSql('CREATE INDEX IDX_CD56093C2261105F ON alimentations (aliment_type_id)');
        $this->addSql('CREATE INDEX IDX_CD56093C8E962C16 ON alimentations (animal_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE alimentations DROP FOREIGN KEY FK_CD56093C4827B9B2');
        $this->addSql('ALTER TABLE alimentations DROP FOREIGN KEY FK_CD56093CD2FD85F1');
        $this->addSql('ALTER TABLE alimentations DROP FOREIGN KEY FK_CD56093C2261105F');
        $this->addSql('ALTER TABLE alimentations DROP FOREIGN KEY FK_CD56093C8E962C16');
        $this->addSql('DROP INDEX IDX_CD56093C4827B9B2 ON alimentations');
        $this->addSql('DROP INDEX IDX_CD56093CD2FD85F1 ON alimentations');
        $this->addSql('DROP INDEX IDX_CD56093C2261105F ON alimentations');
        $this->addSql('DROP INDEX IDX_CD56093C8E962C16 ON alimentations');
    }
}
