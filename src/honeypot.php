<?php
/**
 * Created by PhpStorm.
 * User: www.sib.li
 * Date: 23.05.18
 * Time: 02:11
 */


/**
 * @param string $url
 * @return string
 */
function trimUrl($url = '') {
    $url = strtolower($url);
    $url = trim($url, "\/ \t\n\r\0\x0B");
    return $url;
}


const HONEYPOT_CATCH_URLS = <<<'END_OF_HONEYPOT_CATCH_URLS'
/update.php
/register.php

/config.php
/config.inc.php

/a2billing/admin/Public/modules/

/sql
/mysql
/SQLiteManager-1.2.4/main.php
/SQlite/main.php
/SQLiteManager/main.php
/SQLite/SQLiteManager-1.2.4/main.php
/searchreplacedb2.php
/include-sql.php

/MySQLDumper
/mySqlDumper
/mysqldumper
/msd1.24stable
/msd1.24.4
/msd

/myadmin
/phpMyAdmin
/phpmyadmin/favicon.ico

/fckeditor/fckconfig.js
/FCK/fckeditor.js
/fckeditor.js
/ckeditor/ckeditor.js

/dialog/dialog.js

/joomla/administrator

/jmx-console
/webdav
/xmlrpc-activate.php
/xmlrpc.php
/libraries/sfn.php

/manager/html
/cms/administrator
/administrator
/admin.php
/admin/
/admin/config.php
/admin/basic
/admin/module-builtin.xml
/administrator/index.php
/admin/i18n/readme.txt
/admin/assets/js/views/login.js
/administrator/components/com_jinc/classes/graphics/php-ofc-
/a2billing/admin/Public/index.php

/Wordpress/wp-login.php
/wordpress/
/wp/

/wp-admin/
/Blog/wp-login.php
/wp-admin/admin-ajax.php
/wp-admin/includes/image-import.php
/wp-admin/install.php
/wp-login.php
/wp-content/plugins/cherry-plugin/admin/js/cherry-admin-plugin.js
/wp-content/plugins/cherry-plugin/admin/css/widget-rules.css

/wp-includes/wlwmanifest.xml
/site/wp-includes/wlwmanifest.xml
/cms/wp-includes/wlwmanifest.xml
/wp/wp-includes/wlwmanifest.xml
/blog/wp-includes/wlwmanifest.xml
/wordpress/wp-includes/wlwmanifest.xml
/wp/wp-admin/install.php

/vtigercrm/matrix.php
/vtigercrm/vtigerservice.php

/logo_img.php
/newsletter/subscriber/new/

/README.txt
/readme.txt
/license.txt
/readme.html

/modules/mod_simplefileuploadv1.3/elements/udd.php

/user/
/user/password
/user/register

/sitemap.xml.php
/jenkins/script

/wysiwygeditor/tinymce/plugins/ccSimpleUploader/uploader.php

/sfi9876
/js/sfi9876
/~sfi9876

/proxychecker/check.cgi
/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php
END_OF_HONEYPOT_CATCH_URLS;

$trapCatchUrls = explode("\n", HONEYPOT_CATCH_URLS);

$trapCatchUrls = array_filter($trapCatchUrls);

$trapCatchUrls = array_map('trimUrl', $trapCatchUrls);

$trapCatchUrls = array_unique($trapCatchUrls);
sort($trapCatchUrls, SORT_NATURAL | SORT_FLAG_CASE);


const HONEYPOT_REDIRECT_URLS = <<<'END_OF_HONEYPOT_REDIRECT_URLS'
http://mirror.yandex.ru/linuxmint/stable/17.3/linuxmint-17.3-xfce-64bit.iso
http://mirror.yandex.ru/linuxmint/stable/17.3/linuxmint-17.3-mate-oem-64bit.iso
https://mirror.yandex.ru/opensuse/distribution/openSUSE-stable/iso/openSUSE-Leap-15.0-DVD-x86_64.iso
https://mirror.yandex.ru/altlinux/5.1/iso/altlinux-5.1-WM-Child-Inst-i586-ru-install-dvd.iso
http://ftp.yandex.ru/fedora/linux/releases/28/Server/x86_64/iso/Fedora-Server-dvd-x86_64-28-1.1.iso
http://mirror.yandex.ru/gentoo-distfiles/releases/x86/12.1/livedvd-x86-amd64-32ul-2012.1.iso
http://mirror.yandex.ru/freebsd/releases/ISO-IMAGES/10.2/FreeBSD-10.2-RELEASE-amd64-uefi-dvd1.iso
http://mirror.yandex.ru/freebsd/releases/ISO-IMAGES/10.2/FreeBSD-10.2-RELEASE-ia64-disc1.iso
END_OF_HONEYPOT_REDIRECT_URLS;

$trapRedirects = explode("\n", HONEYPOT_REDIRECT_URLS);
