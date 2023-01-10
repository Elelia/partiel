<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230110104552 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bot (id INT AUTO_INCREMENT NOT NULL, bot_role_id INT DEFAULT NULL, nom_bot VARCHAR(255) NOT NULL, INDEX IDX_11F041129F54F89 (bot_role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bot ADD CONSTRAINT FK_11F041129F54F89 FOREIGN KEY (bot_role_id) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bot DROP FOREIGN KEY FK_11F041129F54F89');
        $this->addSql('DROP TABLE bot');
    }
}
