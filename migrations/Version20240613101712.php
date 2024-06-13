<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240613101712 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF3466812469DE2');
        $this->addSql('DROP INDEX IDX_3AF3466812469DE2 ON categories');
        $this->addSql('ALTER TABLE categories ADD name VARCHAR(255) NOT NULL, DROP category_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories ADD category_id INT DEFAULT NULL, DROP name');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF3466812469DE2 FOREIGN KEY (category_id) REFERENCES categories (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_3AF3466812469DE2 ON categories (category_id)');
    }
}
