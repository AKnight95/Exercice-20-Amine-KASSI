<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230810093154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE owner_animaux (owner_id INT NOT NULL, animaux_id INT NOT NULL, INDEX IDX_16C89F927E3C61F9 (owner_id), INDEX IDX_16C89F92A9DAECAA (animaux_id), PRIMARY KEY(owner_id, animaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE owner_animaux ADD CONSTRAINT FK_16C89F927E3C61F9 FOREIGN KEY (owner_id) REFERENCES owner (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE owner_animaux ADD CONSTRAINT FK_16C89F92A9DAECAA FOREIGN KEY (animaux_id) REFERENCES animaux (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE owner_animaux DROP FOREIGN KEY FK_16C89F927E3C61F9');
        $this->addSql('ALTER TABLE owner_animaux DROP FOREIGN KEY FK_16C89F92A9DAECAA');
        $this->addSql('DROP TABLE owner_animaux');
    }
}
