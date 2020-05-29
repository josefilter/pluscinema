<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200507112406 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comentario CHANGE pelicula_id pelicula_id INT DEFAULT NULL, CHANGE serie_id serie_id INT DEFAULT NULL, CHANGE autor_id autor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE valoracion CHANGE autor_id autor_id INT DEFAULT NULL, CHANGE pelicula_id pelicula_id INT DEFAULT NULL, CHANGE serie_id serie_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comentario CHANGE serie_id serie_id INT DEFAULT NULL, CHANGE pelicula_id pelicula_id INT DEFAULT NULL, CHANGE autor_id autor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE valoracion CHANGE autor_id autor_id INT DEFAULT NULL, CHANGE pelicula_id pelicula_id INT DEFAULT NULL, CHANGE serie_id serie_id INT DEFAULT NULL');
    }
}
