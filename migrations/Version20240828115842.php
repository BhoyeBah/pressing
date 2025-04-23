<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240828115842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, pressing_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, INDEX IDX_F6B4FB29B8BA6AB2 (pressing_id), UNIQUE INDEX UNIQ_F6B4FB29A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE employe ADD membre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B96A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('CREATE INDEX IDX_F804D3B96A99F74A ON employe (membre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B96A99F74A');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29B8BA6AB2');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29A76ED395');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP INDEX IDX_F804D3B96A99F74A ON employe');
        $this->addSql('ALTER TABLE employe DROP membre_id');
    }
}
