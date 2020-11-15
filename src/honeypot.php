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
https://mirror.yandex.ru/altlinux/p7/images/simply/altlinux-7.0.4-simply-i586-live-dvd5.iso
https://mirror.yandex.ru/altlinux/4.0/Server/4.0.1/iso/altlinux-4.0.1-server-i586-install-cd.iso
https://mirror.yandex.ru/altlinux/4.0/Desktop/4.0.3/iso/altlinux-4.0.3-lite-i586-install_en-cd.iso
https://mirror.yandex.ru/altlinux/p8/images/education/alt-education-8.1-i586.iso
https://mirror.yandex.ru/altlinux/p5/iso/school/5.0.2/altlinux-5.0.2-school-terminal-i586-ru-install-dvd5.iso
https://mirror.yandex.ru/altlinux/4.0/Server/4.0.1/iso/altlinux-4.0.1-server-x86_64-contrib-dvd9.iso
https://mirror.yandex.ru/altlinux/p8/images/kworkstation/alt-kworkstation-8.3-live-i586.iso
https://mirror.yandex.ru/altlinux/p5/iso/school/5.0.1/altlinux-5.0.1-school-lite-i586-ru-install-cd.iso
https://mirror.yandex.ru/altlinux/p9/images/server/aarch64/alt-server-9.0-aarch64.iso
https://mirror.yandex.ru/altlinux/p8/images/education/alt-education-8.2-x86_64.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2016.08/archlinux-2016.08-1-archboot.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2018.06/archlinux-2018.06-1-archboot.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2020.07/archlinux-2020.07-1-archboot.iso
https://mirror.yandex.ru/archlinux/iso/2020.11.01/archlinux-2020.11.01-x86_64.iso
https://mirror.yandex.ru/archlinux/iso/2020.09.01/archlinux-2020.09.01-x86_64.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2016.12/archlinux-2016.12-1-archboot.iso
https://mirror.yandex.ru/archlinux/iso/2020.10.01/archlinux-2020.10.01-x86_64.iso
https://mirror.yandex.ru/centos/7.8.2003/isos/x86_64/CentOS-7-x86_64-Minimal-2003.iso
https://mirror.yandex.ru/centos/6.10/isos/x86_64/CentOS-6.10-x86_64-bin-DVD1.iso
https://mirror.yandex.ru/centos/6.10/isos/i386/CentOS-6.10-i386-bin-DVD1.iso
https://mirror.yandex.ru/centos/6.10/isos/x86_64/CentOS-6.10-x86_64-LiveDVD.iso
https://mirror.yandex.ru/centos/6.10/isos/i386/CentOS-6.10-i386-bin-DVD2.iso
https://mirror.yandex.ru/centos/7.9.2009/isos/x86_64/CentOS-7-x86_64-DVD-2009.iso
https://mirror.yandex.ru/centos/7.9.2009/isos/x86_64/CentOS-7-x86_64-Minimal-2009.iso
https://mirror.yandex.ru/centos/7.8.2003/isos/x86_64/CentOS-7-x86_64-Everything-2003.iso
https://mirror.yandex.ru/centos/6.10/isos/x86_64/CentOS-6.10-x86_64-bin-DVD2.iso
https://mirror.yandex.ru/centos/7.8.2003/isos/x86_64/CentOS-7-x86_64-DVD-2003.iso
https://mirror.yandex.ru/debian/pool/main/t/texlive-extra/texlive-extra_2014.20141024.orig.tar.xz
https://mirror.yandex.ru/debian/pool/non-free/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_9.2.148.orig.tar.gz
https://mirror.yandex.ru/debian/pool/main/r/redeclipse-data/redeclipse-data_1.4.orig.tar.xz
https://mirror.yandex.ru/debian/pool/main/f/fonts-noto/fonts-noto_20181227.orig.tar.gz
https://mirror.yandex.ru/debian/pool/non-free/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_11.0.3.orig-arm64.tar.xz
https://mirror.yandex.ru/debian/pool/main/r/redeclipse-data/redeclipse-data_1.6.0.orig.tar.xz
https://mirror.yandex.ru/debian/pool/main/f/fonts-noto/fonts-noto_20201027.orig.tar.gz
https://mirror.yandex.ru/debian/pool/main/o/otb/otb_7.2.0+dfsg.orig.tar.xz
https://mirror.yandex.ru/debian/pool/main/t/texlive-extra/texlive-extra_2018.20190227.orig.tar.xz
https://mirror.yandex.ru/debian/pool/main/s/sagemath-database-cremona-elliptic-curves/sagemath-database-cremona-elliptic-curves_0~20191029.orig.tar.gz
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/15/Live/x86_64/RFRemix-15-x86_64-LiveDVD-KDE.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/11/Live/i686/RFRemix-11-i686-Live-XFCE.iso
https://mirror.yandex.ru/fedora/stage/33_RC-1.2/Labs/x86_64/iso/Fedora-Games-Live-x86_64-33-1.2.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/14/RFRemix/x86_64/iso/RFRemix-14-x86_64-disc1.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/test/RFRemix/27_Beta/Spins/x86_64/RFRemix-MATE_Compiz-Live-x86_64-27_Beta-1.2.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/24/Workstation/i386/iso/RFRemix-Live-Workstation-i686-24-1.6.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/12/RFRemix/x86_64/iso/RFRemix-12-x86_64-disc5.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/14/RFRemix/x86_64/iso/RFRemix-14-x86_64-disc5.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/21/Workstation/x86_64/iso/RFRemix-Live-Workstation-x86_64-21.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/13/Live/i686/RFRemix-13-i686-LiveDVD.iso
https://mirror.yandex.ru/freebsd/development/CVS-archive/ncvs-src-archive.tar.gz
https://mirror.yandex.ru/freebsd/development/subversion/svnmirror-base-r339497.tar.xz
https://mirror.yandex.ru/freebsd/development/subversion/svnmirror-socsvn-r337283.tar.xz
https://mirror.yandex.ru/freebsd/releases/amd64/amd64/ISO-IMAGES/12.2/FreeBSD-12.2-RELEASE-amd64-dvd1.iso
https://mirror.yandex.ru/freebsd/development/subversion/svnmirror-base-r358354.tar.xz
https://mirror.yandex.ru/freebsd/development/subversion/svnmirror-base-r249796.tar.xz
https://mirror.yandex.ru/freebsd/releases/powerpc/powerpc/ISO-IMAGES/12.2/FreeBSD-12.2-RELEASE-powerpc-disc1.iso
https://mirror.yandex.ru/freebsd/releases/sparc64/sparc64/ISO-IMAGES/12.1/FreeBSD-12.1-RELEASE-sparc64-dvd1.iso
https://mirror.yandex.ru/freebsd/releases/i386/i386/ISO-IMAGES/11.4/FreeBSD-11.4-RELEASE-i386-dvd1.iso
https://mirror.yandex.ru/freebsd/releases/amd64/amd64/ISO-IMAGES/12.1/FreeBSD-12.1-RELEASE-amd64-dvd1.iso
https://mirror.yandex.ru/gentoo-distfiles/distfiles/52/chromium-86.0.4240.193.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/82/amd64-debug-libreoffice-6.4.6.2-r2.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/b9/x86-debug-libreoffice-6.4.6.2-r2.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/92/noto-20200308.tar.gz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/5c/chromium-88.0.4300.0.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/ca/android-studio-ide-193.6626763-linux.tar.gz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/c9/chromium-87.0.4280.27.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/35/chromium-87.0.4280.20.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/13/noto-20200521.tar.gz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/07/chromium-87.0.4280.60.tar.xz
https://mirror.yandex.ru/linuxmint/stable/13/linuxmint-13-cinnamon-dvd-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/17.2/linuxmint-17.2-cinnamon-nocodecs-64bit.iso
https://mirror.yandex.ru/linuxmint/stable/19.1/linuxmint-19.1-xfce-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/18/linuxmint-18-kde-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/17.1/linuxmint-17.1-cinnamon-oem-64bit.iso
https://mirror.yandex.ru/linuxmint/stable/19.2/linuxmint-19.2-mate-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/14/linuxmint-14-mate-dvd-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/10/linuxmint-10-lxde-cd-i386.iso
https://mirror.yandex.ru/linuxmint/stable/8/LinuxMint-8-KDE.iso
https://mirror.yandex.ru/linuxmint/debian/lmde-2-201701-mate-32bit.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_3/OpenMandrivaLx.3.03-PLASMA.x86_64.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_4/OpenMandrivaLx.4.0-plasma.x86_64.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_4/OpenMandrivaLx.4.0-plasma.znver1.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_3/OpenMandrivaLx.3.03-PLASMA.i586.iso
https://mirror.yandex.ru/opensuse/repositories/OBS:/Server:/2.6/images/iso/obs-server.x86_64-2.6.10-Build3.129.install.iso
https://mirror.yandex.ru/opensuse/repositories/Virtualization:/Appliances:/Images:/openSUSE-Tumbleweed/openSUSE_Tumbleweed/iso/openSUSE-Tumbleweed-XFCE-Live-x86_64-Build66.1-Media.iso
https://mirror.yandex.ru/opensuse/repositories/devel:/ARM:/Factory:/Contrib:/HEAD/images/openSUSE-Tumbleweed-ARM-KDE.aarch64-rootfs.aarch64-2019.03.22-Build10.8.tar.xz
https://mirror.yandex.ru/opensuse/distribution/leap/15.2/microos/iso/openSUSE-MicroOS-15.2-DVD-x86_64-Build35.47-Media.iso
https://mirror.yandex.ru/opensuse/repositories/GNOME:/Medias/images/iso/GNOME_3.6.2.i686-3.6.2-Build1.42.iso
https://mirror.yandex.ru/opensuse/repositories/OBS:/Server:/2.8/images/iso/obs-server.x86_64-2.8.4-Build1.65.install.iso
https://mirror.yandex.ru/opensuse/repositories/devel:/ARM:/Factory:/Contrib:/HEAD/images/openSUSE-Tumbleweed-ARM-XFCE.aarch64-rootfs.aarch64-2019.03.22-Build10.8.tar.xz
https://mirror.yandex.ru/opensuse/distribution/leap/15.2/microos/iso/openSUSE-MicroOS-15.2-DVD-aarch64-Build35.47-Media.iso
https://mirror.yandex.ru/opensuse/distribution/leap/15.2/appliances/iso/openSUSE-Leap-15.2-Rescue-CD-x86_64-Build31.230-Media.iso
https://mirror.yandex.ru/opensuse/repositories/X11:/xfce:/disks/images/iso/openSUSE_Rat.x86_64-4.13.0-EFI-Build31.50.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-12.1-iso/slackware-12.1-install-d2.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-12.1-iso/slackware-12.1-install-d3.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-13.0-iso/slackware-13.0-source-d6.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware64-13.1-iso/slackware64-13.1-install-dvd.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-13.1-iso/slackware-13.1-source-d4.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-12.0-iso/slackware-12.0-source-d5.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-13.37-iso/slackware-13.37-install-d4.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-14.0-iso/slackware-14.0-install-d1.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-12.2-iso/slackware-12.2-source-d6.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-13.37-iso/slackware-13.37-source-d6.iso
https://mirror.yandex.ru/ubuntu/pool/universe/o/otb/otb_7.0.0+dfsg.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/universe/u/unidic-mecab/unidic-mecab_2.3.0+dfsg.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/universe/r/redeclipse-data/redeclipse-data_1.6.0.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_5.5.22.orig.tar.gz
https://mirror.yandex.ru/ubuntu/pool/universe/o/otb/otb_7.1.0+dfsg.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_7.5.18.orig-ppc64el.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_9.1.85.orig-ppc64el.tar.gz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_10.1.243.orig-ppc64el.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_10.1.168.orig-ppc64el.tar.xz
https://mirror.yandex.ru/ubuntu/pool/main/t/texlive-extra/texlive-extra_2013.20140215.orig.tar.xz
END_OF_HONEYPOT_REDIRECT_URLS;

$trapRedirects = explode("\n", HONEYPOT_REDIRECT_URLS);
