<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\StoreDataByDate;
use App\Models\ModelData;

class DeleteOldRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:old_records';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $oneYearAgo = now()->subYear();
        StoreDataByDate::where('created_at', '<', $oneYearAgo)->delete();
        ModelData::where('created_at', '<', $oneYearAgo)->delete();

        $this->info('Old records deleted successfully.');
    }
}
