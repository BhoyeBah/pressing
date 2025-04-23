<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240830135554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_detail ADD numero INT NOT NULL');
        $this->addSql('ALTER TABLE demande_pressing ADD numero INT NOT NULL');
        $this->addSql('ALTER TABLE employe ADD numero INT NOT NULL');
        $this->addSql('ALTER TABLE membre ADD numero INT NOT NULL');
        $this->addSql('ALTER TABLE paiement ADD numero INT NOT NULL');
        $this->addSql('ALTER TABLE pressing ADD numero INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_detail DROP numero');
        $this->addSql('ALTER TABLE demande_pressing DROP numero');
        $this->addSql('ALTER TABLE employe DROP numero');
        $this->addSql('ALTER TABLE membre DROP numero');
        $this->addSql('ALTER TABLE paiement DROP numero');
        $this->addSql('ALTER TABLE pressing DROP numero');
    }
}
