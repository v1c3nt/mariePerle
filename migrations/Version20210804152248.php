<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210804152248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` CHANGE new new TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE in_progress in_progress TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE shipped shipped TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE shipped_at shipped_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE complete complete TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE completed_at completed_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` CHANGE new new TINYINT(1) NOT NULL, CHANGE in_progress in_progress TINYINT(1) NOT NULL, CHANGE shipped shipped TINYINT(1) NOT NULL, CHANGE shipped_at shipped_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE complete complete TINYINT(1) NOT NULL, CHANGE completed_at completed_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
