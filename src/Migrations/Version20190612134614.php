<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190612134614 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ingredients (id INT AUTO_INCREMENT NOT NULL, qualite_ingredients_id INT DEFAULT NULL, categorie_ingredients_id INT DEFAULT NULL, sous_categorie_ingredients_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_4B60114F73C5E8B3 (qualite_ingredients_id), INDEX IDX_4B60114F95E62AA1 (categorie_ingredients_id), INDEX IDX_4B60114FB11C8A7D (sous_categorie_ingredients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qualite_ingredients (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_categorie_ingredients (id INT AUTO_INCREMENT NOT NULL, categorie_ingredients_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_FDCC4295E62AA1 (categorie_ingredients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ingredients ADD CONSTRAINT FK_4B60114F73C5E8B3 FOREIGN KEY (qualite_ingredients_id) REFERENCES qualite_ingredients (id)');
        $this->addSql('ALTER TABLE ingredients ADD CONSTRAINT FK_4B60114F95E62AA1 FOREIGN KEY (categorie_ingredients_id) REFERENCES categorie_ingredients (id)');
        $this->addSql('ALTER TABLE ingredients ADD CONSTRAINT FK_4B60114FB11C8A7D FOREIGN KEY (sous_categorie_ingredients_id) REFERENCES sous_categorie_ingredients (id)');
        $this->addSql('ALTER TABLE sous_categorie_ingredients ADD CONSTRAINT FK_FDCC4295E62AA1 FOREIGN KEY (categorie_ingredients_id) REFERENCES categorie_ingredients (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ingredients DROP FOREIGN KEY FK_4B60114F73C5E8B3');
        $this->addSql('ALTER TABLE ingredients DROP FOREIGN KEY FK_4B60114FB11C8A7D');
        $this->addSql('DROP TABLE ingredients');
        $this->addSql('DROP TABLE qualite_ingredients');
        $this->addSql('DROP TABLE sous_categorie_ingredients');
    }
}
