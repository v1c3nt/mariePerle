<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210812201122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, copy TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD main_picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D6BDC9DC FOREIGN KEY (main_picture_id) REFERENCES photo (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66D6BDC9DC ON article (main_picture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE post');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D6BDC9DC');
        $this->addSql('DROP INDEX IDX_23A0E66D6BDC9DC ON article');
        $this->addSql('ALTER TABLE article DROP main_picture_id');
    }
}
