<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200131113231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX UNIQ_B723AF33D17F50A6');
        $this->addSql('CREATE TEMPORARY TABLE __temp__student AS SELECT id, first_name, last_name, birth_date, gender, first_mark, second_mark, uuid, created_at, updated_at, classroom_id FROM student');
        $this->addSql('DROP TABLE student');
        $this->addSql('CREATE TABLE student (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, first_name VARCHAR(64) NOT NULL COLLATE BINARY, last_name VARCHAR(128) NOT NULL COLLATE BINARY, birth_date DATE NOT NULL --(DC2Type:date_immutable)
        , gender BOOLEAN NOT NULL, first_mark SMALLINT DEFAULT NULL, second_mark SMALLINT DEFAULT NULL, uuid CHAR(36) NOT NULL COLLATE BINARY --(DC2Type:uuid)
        , created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , classroom_id INTEGER UNSIGNED DEFAULT NULL, updated_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , average NUMERIC(4, 2) DEFAULT NULL)');
        $this->addSql('INSERT INTO student (id, first_name, last_name, birth_date, gender, first_mark, second_mark, uuid, created_at, updated_at, classroom_id) SELECT id, first_name, last_name, birth_date, gender, first_mark, second_mark, uuid, created_at, updated_at, classroom_id FROM __temp__student');
        $this->addSql('DROP TABLE __temp__student');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33D17F50A6 ON student (uuid)');
        $this->addSql('DROP INDEX UNIQ_497D309DD17F50A6');
        $this->addSql('CREATE TEMPORARY TABLE __temp__classroom AS SELECT id, name, grade, uuid, created_at, updated_at FROM classroom');
        $this->addSql('DROP TABLE classroom');
        $this->addSql('CREATE TABLE classroom (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, grade SMALLINT NOT NULL, uuid CHAR(36) NOT NULL COLLATE BINARY --(DC2Type:uuid)
        , created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , name VARCHAR(64) NOT NULL, updated_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO classroom (id, name, grade, uuid, created_at, updated_at) SELECT id, name, grade, uuid, created_at, updated_at FROM __temp__classroom');
        $this->addSql('DROP TABLE __temp__classroom');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_497D309DD17F50A6 ON classroom (uuid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX UNIQ_497D309DD17F50A6');
        $this->addSql('CREATE TEMPORARY TABLE __temp__classroom AS SELECT id, name, grade, uuid, created_at, updated_at FROM classroom');
        $this->addSql('DROP TABLE classroom');
        $this->addSql('CREATE TABLE classroom (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, grade SMALLINT NOT NULL, uuid CHAR(36) NOT NULL --(DC2Type:uuid)
        , created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , name CHAR(36) NOT NULL COLLATE BINARY --(DC2Type:uuid)
        , updated_at DATETIME DEFAULT \'NULL --(DC2Type:datetime_immutable)\' --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO classroom (id, name, grade, uuid, created_at, updated_at) SELECT id, name, grade, uuid, created_at, updated_at FROM __temp__classroom');
        $this->addSql('DROP TABLE __temp__classroom');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_497D309DD17F50A6 ON classroom (uuid)');
        $this->addSql('DROP INDEX UNIQ_B723AF33D17F50A6');
        $this->addSql('CREATE TEMPORARY TABLE __temp__student AS SELECT id, first_name, last_name, birth_date, gender, first_mark, second_mark, uuid, created_at, updated_at, classroom_id FROM student');
        $this->addSql('DROP TABLE student');
        $this->addSql('CREATE TABLE student (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, first_name VARCHAR(64) NOT NULL, last_name VARCHAR(128) NOT NULL, birth_date DATE NOT NULL --(DC2Type:date_immutable)
        , gender BOOLEAN NOT NULL, first_mark SMALLINT DEFAULT NULL, second_mark SMALLINT DEFAULT NULL, uuid CHAR(36) NOT NULL --(DC2Type:uuid)
        , created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , classroom_id INTEGER UNSIGNED DEFAULT NULL, updated_at DATETIME DEFAULT \'NULL --(DC2Type:datetime_immutable)\' --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO student (id, first_name, last_name, birth_date, gender, first_mark, second_mark, uuid, created_at, updated_at, classroom_id) SELECT id, first_name, last_name, birth_date, gender, first_mark, second_mark, uuid, created_at, updated_at, classroom_id FROM __temp__student');
        $this->addSql('DROP TABLE __temp__student');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33D17F50A6 ON student (uuid)');
    }
}
