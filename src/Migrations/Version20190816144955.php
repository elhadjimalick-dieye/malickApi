<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190816144955 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction ADD numero_transaction VARCHAR(255) NOT NULL, ADD commission_sysetme VARCHAR(255) NOT NULL, ADD commission_etat VARCHAR(255) NOT NULL, ADD commission_partenaiexpediteur VARCHAR(255) NOT NULL, ADD commission_partenaireceveur VARCHAR(255) NOT NULL, DROP numero, DROP commission');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction ADD numero VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD commission VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP numero_transaction, DROP commission_sysetme, DROP commission_etat, DROP commission_partenaiexpediteur, DROP commission_partenaireceveur');
    }
}
