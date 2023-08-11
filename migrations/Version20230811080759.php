<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230811080759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_animaux (user_id INT NOT NULL, animaux_id INT NOT NULL, INDEX IDX_C2B30747A76ED395 (user_id), INDEX IDX_C2B30747A9DAECAA (animaux_id), PRIMARY KEY(user_id, animaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_animaux ADD CONSTRAINT FK_C2B30747A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_animaux ADD CONSTRAINT FK_C2B30747A9DAECAA FOREIGN KEY (animaux_id) REFERENCES animaux (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE owner_animaux DROP FOREIGN KEY FK_16C89F927E3C61F9');
        $this->addSql('ALTER TABLE owner_animaux DROP FOREIGN KEY FK_16C89F92A9DAECAA');
        $this->addSql('DROP TABLE owner');
        $this->addSql('DROP TABLE owner_animaux');
        $this->addSql('ALTER TABLE animaux ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animaux ADD CONSTRAINT FK_9ABE194DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_9ABE194DA76ED395 ON animaux (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animaux DROP FOREIGN KEY FK_9ABE194DA76ED395');
        $this->addSql('CREATE TABLE owner (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telephone INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owner_animaux (owner_id INT NOT NULL, animaux_id INT NOT NULL, INDEX IDX_16C89F92A9DAECAA (animaux_id), INDEX IDX_16C89F927E3C61F9 (owner_id), PRIMARY KEY(owner_id, animaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE owner_animaux ADD CONSTRAINT FK_16C89F927E3C61F9 FOREIGN KEY (owner_id) REFERENCES owner (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE owner_animaux ADD CONSTRAINT FK_16C89F92A9DAECAA FOREIGN KEY (animaux_id) REFERENCES animaux (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_animaux DROP FOREIGN KEY FK_C2B30747A76ED395');
        $this->addSql('ALTER TABLE user_animaux DROP FOREIGN KEY FK_C2B30747A9DAECAA');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_animaux');
        $this->addSql('DROP INDEX IDX_9ABE194DA76ED395 ON animaux');
        $this->addSql('ALTER TABLE animaux DROP user_id');
    }
}
