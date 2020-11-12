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
https://mirror.yandex.ru/altlinux/p9/images/server-v/ppc64le/alt-server-v-9.0-ppc64le.iso
https://mirror.yandex.ru/altlinux/p5/iso/school/5.0.2/altlinux-5.0.2-school-video-lessons-dvd5.iso
https://mirror.yandex.ru/altlinux/p8/images/kworkstation/alt-kworkstation-8.1-install-i586.iso
https://mirror.yandex.ru/altlinux/p9/images/workstation/armh/alt-workstation-mcom02-9.1-armh.tar.xz
https://mirror.yandex.ru/altlinux/p5/iso/school/5.0.1/altlinux-5.0.1-school-documentation-dvd5.iso
https://mirror.yandex.ru/altlinux/p9/images/education/x86_64/alt-education-9.1-x86_64.iso
https://mirror.yandex.ru/altlinux/4.0/Desktop/4.0.2/iso/altlinux-4.0.2-desktop-i586-install-dvd5.iso
https://mirror.yandex.ru/altlinux/p9/images/workstation/i586/alt-workstation-9.0-i586.iso
https://mirror.yandex.ru/altlinux/p9/images/workstation/aarch64/alt-workstation-tegra-9.0-aarch64.tar.xz
https://mirror.yandex.ru/altlinux/4.0/Desktop/4.0.3/iso/altlinux-4.0.3-desktop-i586-install_uk-dvd5.iso
https://mirror.yandex.ru/archlinux/iso/2020.09.01/archlinux-2020.09.01-x86_64.iso
https://mirror.yandex.ru/archlinux/iso/2020.11.01/archlinux-2020.11.01-x86_64.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2016.08/archlinux-2016.08-1-archboot.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2018.06/archlinux-2018.06-1-archboot.iso
https://mirror.yandex.ru/archlinux/iso/2020.10.01/archlinux-2020.10.01-x86_64.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2020.07/archlinux-2020.07-1-archboot.iso
https://mirror.yandex.ru/archlinux/iso/archboot/2016.12/archlinux-2016.12-1-archboot.iso
https://mirror.yandex.ru/centos/7.9.2009/isos/x86_64/CentOS-7-x86_64-Everything-2009.iso
https://mirror.yandex.ru/centos/7.9.2009/isos/x86_64/CentOS-7-x86_64-DVD-2009.iso
https://mirror.yandex.ru/centos/6.10/isos/i386/CentOS-6.10-i386-bin-DVD2.iso
https://mirror.yandex.ru/centos/6.10/isos/x86_64/CentOS-6.10-x86_64-LiveDVD.iso
https://mirror.yandex.ru/centos/6.10/isos/x86_64/CentOS-6.10-x86_64-bin-DVD2.iso
https://mirror.yandex.ru/centos/6.10/isos/i386/CentOS-6.10-i386-LiveDVD.iso
https://mirror.yandex.ru/centos/7.8.2003/isos/x86_64/CentOS-7-x86_64-Everything-2003.iso
https://mirror.yandex.ru/centos/7.8.2003/isos/x86_64/CentOS-7-x86_64-Minimal-2003.iso
https://mirror.yandex.ru/centos/6.10/isos/i386/CentOS-6.10-i386-bin-DVD1.iso
https://mirror.yandex.ru/centos/7.8.2003/isos/x86_64/CentOS-7-x86_64-LiveGNOME-2003.iso
https://mirror.yandex.ru/debian/pool/non-free/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_8.0.44.orig.tar.gz
https://mirror.yandex.ru/debian/pool/non-free/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_9.2.148.orig.tar.gz
https://mirror.yandex.ru/debian/pool/main/r/redeclipse-data/redeclipse-data_1.5.8.orig.tar.xz
https://mirror.yandex.ru/debian/pool/non-free/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_11.0.3.orig-amd64.tar.xz
https://mirror.yandex.ru/debian/pool/main/o/otb/otb_7.2.0+dfsg.orig.tar.xz
https://mirror.yandex.ru/debian/pool/non-free/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_11.0.3.orig-arm64.tar.xz
https://mirror.yandex.ru/debian/pool/non-free/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_11.1.0.orig-ppc64el.tar.xz
https://mirror.yandex.ru/debian/pool/main/r/redeclipse-data/redeclipse-data_1.4.orig.tar.xz
https://mirror.yandex.ru/debian/pool/non-free/r/redeclipse-data/redeclipse-data_1.4.orig.tar.xz
https://mirror.yandex.ru/debian/pool/main/r/rustc/rustc_1.41.1+dfsg1.orig-stage0.tar.xz
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/13/RFRemix/x86_64/iso/RFRemix-13-x86_64-DVD.iso
https://mirror.yandex.ru/fedora/linux/releases/test/33_Beta/Spins/x86_64/iso/Fedora-MATE_Compiz-Live-x86_64-33_Beta-1.3.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/16.1/Live/i686/RFRemix-16.1-i686-Live-GNOME.iso
https://mirror.yandex.ru/fedora/linux/releases/test/33_Beta/Spins/x86_64/iso/Fedora-LXDE-Live-x86_64-33_Beta-1.3.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/12/RFRemix/x86_64/iso/RFRemix-12-x86_64-disc4.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/13/RFRemix/x86_64/iso/RFRemix-13-x86_64-disc2.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/20.1/Live/x86_64/RFRemix-20.1-x86_64-Live-KDE.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/test/RFRemix/28_Beta/Workstation/x86_64/iso/RFRemix-Workstation-Live-x86_64-28_Beta-0.1.iso
https://mirror.yandex.ru/fedora/linux/releases/31/Spins/x86_64/iso/Fedora-MATE_Compiz-Live-x86_64-31-1.9.iso
https://mirror.yandex.ru/fedora/russianfedora/releases/RFRemix/14.1/RFRemix/x86_64/iso/RFRemix-14.1-x86_64-disc4.iso
https://mirror.yandex.ru/freebsd/releases/sparc64/sparc64/ISO-IMAGES/11.4/FreeBSD-11.4-RELEASE-sparc64-dvd1.iso
https://mirror.yandex.ru/freebsd/releases/amd64/amd64/ISO-IMAGES/11.3/FreeBSD-11.3-RELEASE-amd64-dvd1.iso
https://mirror.yandex.ru/freebsd/releases/amd64/amd64/ISO-IMAGES/12.0/FreeBSD-12.0-RELEASE-amd64-dvd1.iso
https://mirror.yandex.ru/freebsd/snapshots/powerpc/powerpc/ISO-IMAGES/12.2/FreeBSD-12.2-STABLE-powerpc-20201105-r367336-disc1.iso
https://mirror.yandex.ru/freebsd/snapshots/powerpc/powerpcspe/ISO-IMAGES/12.2/FreeBSD-12.2-STABLE-powerpc-powerpcspe-20201029-r367116-disc1.iso
https://mirror.yandex.ru/freebsd/snapshots/i386/i386/ISO-IMAGES/12.2/FreeBSD-12.2-STABLE-i386-20201029-r367116-disc1.iso
https://mirror.yandex.ru/freebsd/snapshots/amd64/amd64/ISO-IMAGES/12.2/FreeBSD-12.2-STABLE-amd64-20201029-r367116-disc1.iso
https://mirror.yandex.ru/freebsd/snapshots/arm64/aarch64/ISO-IMAGES/13.0/FreeBSD-13.0-CURRENT-arm64-aarch64-20201022-0035a6c7bb7-disc1.iso
https://mirror.yandex.ru/freebsd/development/subversion/svnmirror-base-r261170.tar.xz
https://mirror.yandex.ru/freebsd/snapshots/amd64/amd64/ISO-IMAGES/11.4/FreeBSD-11.4-STABLE-amd64-20201029-r367062-disc1.iso
https://mirror.yandex.ru/gentoo-distfiles/distfiles/96/chromium-86.0.4240.75.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/experimental/mips/contrib/mips32elsf-gentoo-rootfs-150119.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/13/noto-20200521.tar.gz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/c9/chromium-87.0.4280.27.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/5c/chromium-88.0.4300.0.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/releases/amd64/20170118/livedvd-amd64-hardened-nomultilib-20170118.iso
https://mirror.yandex.ru/gentoo-distfiles/distfiles/96/chromium-87.0.4280.40.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/da/0ad-0.0.23b-alpha-unix-data.tar.xz
https://mirror.yandex.ru/gentoo-distfiles/distfiles/58/kicad-packages3d-5.1.6.tar.gz
https://mirror.yandex.ru/gentoo-distfiles/experimental/mips/contrib/mips32elsf-gentoo-rootfs-150829.tar.xz
https://mirror.yandex.ru/linuxmint/stable/11/linuxmint-11-gnome-oem-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/18.3/linuxmint-18.3-xfce-64bit.iso
https://mirror.yandex.ru/linuxmint/stable/17.2/linuxmint-17.2-cinnamon-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/17.2/linuxmint-17.2-xfce-64bit.iso
https://mirror.yandex.ru/linuxmint/stable/18.3/linuxmint-18.3-cinnamon-32bit.iso
https://mirror.yandex.ru/linuxmint/stable/17.2/linuxmint-17.2-kde-64bit.iso
https://mirror.yandex.ru/linuxmint/stable/9/linuxmint-9-gnome-cd-i386.iso
https://mirror.yandex.ru/linuxmint/stable/17.3/linuxmint-17.3-xfce-64bit.iso
https://mirror.yandex.ru/linuxmint/stable/10/linuxmint-10-gnome-dvd-amd64.iso
https://mirror.yandex.ru/linuxmint/stable/17/linuxmint-17-kde-dvd-32bit.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_3/OpenMandrivaLx.3.03-PLASMA.i586.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_4/OpenMandrivaLx.4.0-plasma.x86_64.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_4/OpenMandrivaLx.4.0-plasma.znver1.iso
https://mirror.yandex.ru/openmandriva/release_current/OpenMandriva_Lx_3/OpenMandrivaLx.3.03-PLASMA.x86_64.iso
https://mirror.yandex.ru/opensuse/repositories/OBS:/Server:/2.5/images/iso/obs-server.x86_64-2.5.7-Build1.223.install.iso
https://mirror.yandex.ru/opensuse/tumbleweed/iso/openSUSE-Tumbleweed-GNOME-Live-i686-Snapshot20201108-Media.iso
https://mirror.yandex.ru/opensuse/repositories/openSUSE:/Factory:/Staging:/K/images/iso/Test-Build770.1-Media.iso
https://mirror.yandex.ru/opensuse/repositories/openSUSE:/Leap:/15.1:/ARM:/Images:/ToTest/images/openSUSE-Leap-15.1-ARM-X11.aarch64-rootfs.aarch64-2019.02.19-Snapshot5.14.tar.xz
https://mirror.yandex.ru/opensuse/tumbleweed/iso/openSUSE-MicroOS-DVD-x86_64-Snapshot20201108-Media.iso
https://mirror.yandex.ru/opensuse/repositories/openSUSE:/Leap:/15.1:/Staging:/C/images/iso/openSUSE-Leap-15.1-DVD-x86_64-Build18.1-Media.iso
https://mirror.yandex.ru/opensuse/repositories/openSUSE:/Leap:/15.1:/ARM:/Images:/ToTest/images/openSUSE-Leap-15.1-ARM-XFCE.aarch64-rootfs.aarch64-2019.02.19-Snapshot5.14.tar.xz
https://mirror.yandex.ru/opensuse/tumbleweed/iso/openSUSE-Tumbleweed-GNOME-Live-x86_64-Snapshot20201108-Media.iso
https://mirror.yandex.ru/opensuse/distribution/jump/15.2/iso/openSUSE-Jump-15.2.1-DVD-aarch64-Build93.5-Media.iso
https://mirror.yandex.ru/opensuse/distribution/leap/15.0/live/openSUSE-Leap-15.0-KDE-Live-x86_64-Snapshot21.14-Media.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-14.1-iso/slackware-14.1-install-d2.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-12.2-iso/slackware-12.2-install-dvd.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-14.2-iso/slackware-14.2-install-dvd.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-12.0-iso/slackware-12.0-source-d6.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-13.1-iso/slackware-13.1-source-d5.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-14.1-iso/slackware-14.1-source-dvd.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-13.0-iso/slackware-13.0-install-d2.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-14.2-iso/slackware-14.2-source-d6.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware64-13.37-iso/slackware64-13.37-install-dvd.iso
https://mirror.yandex.ru/slackware/slackware-iso/slackware-14.1-iso/slackware-14.1-install-d4.iso
https://mirror.yandex.ru/ubuntu/pool/universe/0/0ad-data/0ad-data_0.0.22.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/universe/t/texlive-extra/texlive-extra_2019.202000218.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/main/o/oxide-qt/oxide-qt_1.13.6.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_10.1.168.orig-amd64.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_10.1.243.orig-amd64.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_9.1.85.orig-ppc64el.tar.gz
https://mirror.yandex.ru/ubuntu/pool/universe/c/chromium-browser/chromium-browser_86.0.4240.75.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/main/t/texlive-extra/texlive-extra_2013.20140215.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/universe/o/otb/otb_7.1.0+dfsg.orig.tar.xz
https://mirror.yandex.ru/ubuntu/pool/multiverse/n/nvidia-cuda-toolkit/nvidia-cuda-toolkit_5.5.22.orig.tar.gz
END_OF_HONEYPOT_REDIRECT_URLS;

$trapRedirects = explode("\n", HONEYPOT_REDIRECT_URLS);
