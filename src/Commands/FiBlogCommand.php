<?php

namespace Tqt97\FiBlog\Commands;

use Illuminate\Console\Command;

class FiBlogCommand extends Command
{
    public $signature = 'fi-blog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
