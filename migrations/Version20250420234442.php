<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250420234442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, pressing_id INT DEFAULT NULL, designation VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, numero INT NOT NULL, INDEX IDX_BFDD3168B8BA6AB2 (pressing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, pressing_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, state TINYINT(1) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', numero INT NOT NULL, INDEX IDX_C7440455B8BA6AB2 (pressing_id), UNIQUE INDEX UNIQ_C7440455450FF010B8BA6AB2 (telephone, pressing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, pressing_id INT DEFAULT NULL, numero VARCHAR(255) NOT NULL, date_commande DATETIME NOT NULL, date_livraison DATETIME NOT NULL, montant_total DOUBLE PRECISION NOT NULL, remise DOUBLE PRECISION NOT NULL, status VARCHAR(50) DEFAULT \'non payé\' NOT NULL, reste_apayer INT DEFAULT NULL, INDEX IDX_6EEAA67D19EB6921 (client_id), INDEX IDX_6EEAA67DB8BA6AB2 (pressing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_detail (id INT AUTO_INCREMENT NOT NULL, articles_id INT DEFAULT NULL, commande_id INT DEFAULT NULL, pressing_id INT DEFAULT NULL, quantity INT NOT NULL, prix_unitaire DOUBLE PRECISION NOT NULL, prix_total DOUBLE PRECISION NOT NULL, remise DOUBLE PRECISION DEFAULT NULL, numero INT NOT NULL, INDEX IDX_2C5284461EBAF6CC (articles_id), INDEX IDX_2C52844682EA2E54 (commande_id), INDEX IDX_2C528446B8BA6AB2 (pressing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande_pressing (id INT AUTO_INCREMENT NOT NULL, membre_id INT DEFAULT NULL, pressing_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_4B38FC06A99F74A (membre_id), UNIQUE INDEX UNIQ_4B38FC0B8BA6AB2 (pressing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, pressing_id INT DEFAULT NULL, user_id INT DEFAULT NULL, membre_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', adresse VARCHAR(255) NOT NULL, numero INT NOT NULL, INDEX IDX_F804D3B9B8BA6AB2 (pressing_id), INDEX IDX_F804D3B9A76ED395 (user_id), INDEX IDX_F804D3B96A99F74A (membre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, pressing_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, adresse VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F6B4FB29A76ED395 (user_id), INDEX IDX_F6B4FB29B8BA6AB2 (pressing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, commande_id INT DEFAULT NULL, pressing_id INT DEFAULT NULL, date_paiement DATETIME NOT NULL, montant_recu DOUBLE PRECISION NOT NULL, numero INT NOT NULL, INDEX IDX_B1DC7A1E82EA2E54 (commande_id), INDEX IDX_B1DC7A1EB8BA6AB2 (pressing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pressing (id INT AUTO_INCREMENT NOT NULL, demande_pressing_id INT DEFAULT NULL, membre_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_42EAC602199D35C6 (demande_pressing_id), UNIQUE INDEX UNIQ_42EAC6026A99F74A (membre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, pressing_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, state TINYINT(1) NOT NULL, INDEX IDX_8D93D649B8BA6AB2 (pressing_id), UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DB8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE commande_detail ADD CONSTRAINT FK_2C5284461EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id)');
        $this->addSql('ALTER TABLE commande_detail ADD CONSTRAINT FK_2C52844682EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE commande_detail ADD CONSTRAINT FK_2C528446B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE demande_pressing ADD CONSTRAINT FK_4B38FC06A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE demande_pressing ADD CONSTRAINT FK_4B38FC0B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B96A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EB8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
        $this->addSql('ALTER TABLE pressing ADD CONSTRAINT FK_42EAC602199D35C6 FOREIGN KEY (demande_pressing_id) REFERENCES demande_pressing (id)');
        $this->addSql('ALTER TABLE pressing ADD CONSTRAINT FK_42EAC6026A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649B8BA6AB2 FOREIGN KEY (pressing_id) REFERENCES pressing (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168B8BA6AB2');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455B8BA6AB2');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D19EB6921');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DB8BA6AB2');
        $this->addSql('ALTER TABLE commande_detail DROP FOREIGN KEY FK_2C5284461EBAF6CC');
        $this->addSql('ALTER TABLE commande_detail DROP FOREIGN KEY FK_2C52844682EA2E54');
        $this->addSql('ALTER TABLE commande_detail DROP FOREIGN KEY FK_2C528446B8BA6AB2');
        $this->addSql('ALTER TABLE demande_pressing DROP FOREIGN KEY FK_4B38FC06A99F74A');
        $this->addSql('ALTER TABLE demande_pressing DROP FOREIGN KEY FK_4B38FC0B8BA6AB2');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9B8BA6AB2');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9A76ED395');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B96A99F74A');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29A76ED395');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29B8BA6AB2');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E82EA2E54');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EB8BA6AB2');
        $this->addSql('ALTER TABLE pressing DROP FOREIGN KEY FK_42EAC602199D35C6');
        $this->addSql('ALTER TABLE pressing DROP FOREIGN KEY FK_42EAC6026A99F74A');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649B8BA6AB2');
        $this->addSql('DROP TABLE articles');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_detail');
        $this->addSql('DROP TABLE demande_pressing');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE pressing');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
