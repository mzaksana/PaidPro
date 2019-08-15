<?php

/**
 * PaidPromote Hastag Monitoring (Codename Boov)
 * Copyright (C) 2018 Thiekus
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 */
require "./auth.php";
include "bvfuncs.php";

if (!isset($_GET['hashtag'])) {
	die('Hashtag harus dimasukkan!');
}
$hashtag = $_GET['hashtag'];

$monlist = loadMonitorList("bv_monitorlist.txt");
$posts = fetchHastagPostList($hashtag);
$monstatus = compareMonitorStatus($monlist, $posts);
//var_dump($monstatus);
echo "Status\tUID\tUsername\n";
echo "====================================\n";
foreach ($monstatus as $status) {
	if ($status['posted']) {
		$stat_info = "Sudah";
	} else {
		$stat_info = "Belum";
	}
	echo $stat_info . "\t" . $status['id'] . "\t" . $status['username'] . "\n";
}
