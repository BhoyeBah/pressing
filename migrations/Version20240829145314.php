<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240829145314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_pressing ADD membre_id INT DEFAULT NULL, ADD pressing_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_pressing ADD CONSTRAINT FK_4B38FC06A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE demande_pressing ADD CONSTRAINT FK_4B38FC0B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4B38FC06A99F74A ON demande_pressing (membre_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4B38FC0B8BA6AB2 ON demande_pressing (pressing_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_pressing DROP FOREIGN KEY FK_4B38FC06A99F74A');
        $this->addSql('ALTER TABLE demande_pressing DROP FOREIGN KEY FK_4B38FC0B8BA6AB2');
        $this->addSql('DROP INDEX UNIQ_4B38FC06A99F74A ON demande_pressing');
        $this->addSql('DROP INDEX UNIQ_4B38FC0B8BA6AB2 ON demande_pressing');
        $this->addSql('ALTER TABLE demande_pressing DROP membre_id, DROP pressing_id');
    }
}
