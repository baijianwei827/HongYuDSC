<?php
/**
 * HongYuDSC
 * ============================================================================
 * Copyright © 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/2/26 15:52
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

require __DIR__ . '/config/app.php';

if (file_exists('../data/install.lock.php') && file_exists('install.lock.php')) {
    include("views/error.html");
} else {
    header("Location: ./index.php\n");
    exit();
}