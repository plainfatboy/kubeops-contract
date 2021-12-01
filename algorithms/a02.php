<?php

//Tested on PHP 7.4.3

function distribute(int $nServers,int $nJobs): array {
    $distributedJobs = [];

    $minimumJobsForEachServer = $nJobs%$nServers;

    $remainingJobs = $nJobs - ($minimumJobsForEachServer * $nServers);

    $nJobsForEachServer = array_fill(0, $nServers, $minimumJobsForEachServer);

    for ($server = 0; $server < $remainingJobs; $server++) {
        $nJobsForEachServer[$server]++;
    }

    $job = 0;

    for ($server = 0; $server < $nServers; $server++) {
        $tmp = [];

        for ($i = 0; $i < $nJobsForEachServer[$server]; $i++) {
            $tmp[] = $job++;
        }

        $distributedJobs[] = $tmp;
    }

    return $distributedJobs;
}

print_r(distribute(4,10));
echo PHP_EOL;