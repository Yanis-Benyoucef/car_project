<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231201103608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customers DROP INDEX email, ADD UNIQUE INDEX UNIQ_62534E21E7927C74 (email)');
        $this->addSql('DROP INDEX email_2 ON customers');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX email_2 ON customers (email)');
        $this->addSql('ALTER TABLE customers RENAME INDEX uniq_62534e21e7927c74 TO email');
    }
}
