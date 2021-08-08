<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210808090200 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chakras (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pierre_chakras (pierre_id INT NOT NULL, chakras_id INT NOT NULL, INDEX IDX_3850A9D450800BDF (pierre_id), INDEX IDX_3850A9D4A923ADE4 (chakras_id), PRIMARY KEY(pierre_id, chakras_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pierre_chakras ADD CONSTRAINT FK_3850A9D450800BDF FOREIGN KEY (pierre_id) REFERENCES pierre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pierre_chakras ADD CONSTRAINT FK_3850A9D4A923ADE4 FOREIGN KEY (chakras_id) REFERENCES chakras (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `order` ADD amound DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE pierre DROP chakra, CHANGE forme forme VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pierre_chakras DROP FOREIGN KEY FK_3850A9D4A923ADE4');
        $this->addSql('DROP TABLE chakras');
        $this->addSql('DROP TABLE pierre_chakras');
        $this->addSql('ALTER TABLE `order` DROP amound');
        $this->addSql('ALTER TABLE pierre ADD chakra VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE forme forme VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
