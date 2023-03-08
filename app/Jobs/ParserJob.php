<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ParserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private array $jobData;

    public function __construct(array $jobData)
    {
        $this->jobData = $jobData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        session()->flash('message', json_encode($this->jobData));
    }
}
