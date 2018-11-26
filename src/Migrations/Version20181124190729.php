<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181124190729 extends AbstractMigration
{
    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     */
    public function up(Schema $schema) : void
    {
        $table = $schema->createTable('users');
        $table->addColumn('id', 'integer', [
            'autoincrement' => true,
            'unsigned' => true,
        ]);
        $table->addColumn('name', 'string', [
            'notnull' => true,
            'length' => 100,
        ]);
        $table->addColumn('surname', 'string', [
            'notnull' => true,
            'length' => 100,
        ]);
        $table->addColumn('email', 'string', [
            'notnull' => true,
            'length' => 100,
            'unique' => true,
        ]);
        $table->addColumn('password', 'string', [
            'notnull' => true,
        ]);
        $table->addColumn('token', 'string', [
            'notnull' => true,
            'unique' => true,
        ]);
        $table->addColumn('company_id', 'integer', [
            'unsigned' => true,
            'notnull' => false,
        ]);

        $table->addColumn('created_at', 'datetime', [
            'default' => $this->connection->getDatabasePlatform()->getCurrentTimestampSQL(),
//            'oncreate' => $this->connection->getDatabasePlatform()->getCurrentTimestampSQL(),
        ]);
        $table->addColumn('updated_at', 'datetime', [
            'default' => $this->connection->getDatabasePlatform()->getCurrentTimestampSQL(),
//            'oncreate' => $this->connection->getDatabasePlatform()->getCurrentTimestampSQL(),
//            'onupdate' => $this->connection->getDatabasePlatform()->getCurrentTimestampSQL(),
        ]);
        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        $table = $schema->dropTable('users');
    }
}
