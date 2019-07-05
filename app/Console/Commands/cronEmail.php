<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\User;
use Carbon\Carbon;
use App\cron;

class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cronjob:cronEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email every minutes';

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
      // dd('asaa');
        $curdate=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:');
        $from = $curdate. '00';
        $to = $curdate. '59';
        //dd($from);
        //dd('asaa');

      //$totalUsers=User::where('created_at','>',$from)->where('created_at','<',$to)->count();
        $totalUsers=User::count();
      //dd($curdate);
       //dd($totalUsers);
       $cron= new Cron;
       $cron->time=$curdate;
       $cron->count=$totalUsers;
       $cron->save();

       // dd($totalUsers);

       // Mail::to('vuongminhanhsnail@gmail.com')->send(new SendMailable($totalUsers));
        //dd($totalUsers);
    }
}
