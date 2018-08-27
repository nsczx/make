<?php

namespace run_tp5;

error_reporting(E_ERROR);

defined('IN_IA') or exit('Access Denied');

class Init
{
    public function run()
    {
        global $_W;
        $url = $_W['siteroot'] . 'addons/' . $_W['current_module']['name'] . '/core/public/index.php';

        if (file_exists(__DIR__ . '/core/public/index.php')) {
            header('Location:' . $url);
            exit;
        }
    }

}

(new Init())->run();
exit;