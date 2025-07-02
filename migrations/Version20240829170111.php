<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240829170111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pressing ADD demande_pressing_id INT DEFAULT NULL, ADD membre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pressing ADD CONSTRAINT FK_42EAC602199D35C6 FOREIGN KEY (demande_pressing_id) REFERENCES demande_pressing (id)');
        $this->addSql('ALTER TABLE pressing ADD CONSTRAINT FK_42EAC6026A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_42EAC602199D35C6 ON pressing (demande_pressing_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_42EAC6026A99F74A ON pressing (membre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pressing DROP FOREIGN KEY FK_42EAC602199D35C6');
        $this->addSql('ALTER TABLE pressing DROP FOREIGN KEY FK_42EAC6026A99F74A');
        $this->addSql('DROP INDEX UNIQ_42EAC602199D35C6 ON pressing');
        $this->addSql('DROP INDEX UNIQ_42EAC6026A99F74A ON pressing');
        $this->addSql('ALTER TABLE pressing DROP demande_pressing_id, DROP membre_id');
    }
}
