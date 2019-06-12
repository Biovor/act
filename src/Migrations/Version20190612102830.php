<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190612102830 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sous_categorie_ingredients ADD categorie_ingredients_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sous_categorie_ingredients ADD CONSTRAINT FK_FDCC4295E62AA1 FOREIGN KEY (categorie_ingredients_id) REFERENCES categorie_ingredients (id)');
        $this->addSql('CREATE INDEX IDX_FDCC4295E62AA1 ON sous_categorie_ingredients (categorie_ingredients_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sous_categorie_ingredients DROP FOREIGN KEY FK_FDCC4295E62AA1');
        $this->addSql('DROP INDEX IDX_FDCC4295E62AA1 ON sous_categorie_ingredients');
        $this->addSql('ALTER TABLE sous_categorie_ingredients DROP categorie_ingredients_id');
    }
}
