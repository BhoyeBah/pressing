<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240822225748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membre ADD pressing_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F6B4FB29B8BA6AB2 ON membre (pressing_id)');
        $this->addSql('ALTER TABLE user ADD membre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6496A99F74A ON user (membre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29B8BA6AB2');
        $this->addSql('DROP INDEX UNIQ_F6B4FB29B8BA6AB2 ON membre');
        $this->addSql('ALTER TABLE membre DROP pressing_id');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D6496A99F74A');
        $this->addSql('DROP INDEX IDX_8D93D6496A99F74A ON `user`');
        $this->addSql('ALTER TABLE `user` DROP membre_id');
    }
}
