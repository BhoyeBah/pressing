<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240830171908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_detail ADD pressing_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande_detail ADD CONSTRAINT FK_2C528446B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('CREATE INDEX IDX_2C528446B8BA6AB2 ON commande_detail (pressing_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_detail DROP FOREIGN KEY FK_2C528446B8BA6AB2');
        $this->addSql('DROP INDEX IDX_2C528446B8BA6AB2 ON commande_detail');
        $this->addSql('ALTER TABLE commande_detail DROP pressing_id');
    }
}
