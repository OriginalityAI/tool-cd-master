<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddMoreBots extends AbstractMigration
{
  public function change(): void
  {
    $this->execute('INSERT INTO Bots (name) VALUES
            ("ChatGPT-User"),
            ("Googlebot"),
            ("ClaudeBot"),
            ("FacebookBot"),
            ("cohere-ai")
        ');


    $this->execute('INSERT INTO MigrationLog (description) VALUES ("Added 5 new bots: ChatGPT-User, Googlebot, ClaudeBot, FacebookBot, cohere-ai")');
  }
}