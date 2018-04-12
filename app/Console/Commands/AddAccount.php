<?php

namespace App\Console\Commands;

use App\Models\Account;

use Illuminate\Console\Command;

use Carbon\Carbon;

class AddAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:account';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Used to create an account';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $accountArray['name'] = $this->ask('Name');
        $accountArray['address1'] = $this->ask('Address1');
        $accountArray['city'] = $this->ask('City');
        $accountArray['state'] = $this->ask('State');
        $accountArray['zip'] = $this->ask('Zip');
        $accountArray['email'] = $this->ask('Email');
        $accountArray['phone'] = $this->ask('Phone');
        $accountArray['created_at'] = Carbon::now();
        $accountArray['created_by'] = 1;
        $accountArray['updated_by'] = 1;

        $account = new Account($accountArray);
        $account->save();

        $this->info('Succefully created: ' . $account->name);
    }
}
