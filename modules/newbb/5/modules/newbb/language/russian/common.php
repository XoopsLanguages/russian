<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * Wfdownloads module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         wfdownload
 * @since           3.23
 * @author          Xoops Development Team
 */
$moduleDirName      = basename(dirname(dirname(__DIR__)));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', '��������� ���������� GD: ');
define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', '������ ���������� GD: ');
define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>���������</span> (��������� �� ��������)");
define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>��������</span> (��������� ��������)");
define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', '������ �������');
define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', '������������ ����������� ������ ��������� (��������� post_max_size � php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', '������������ ����������� ������ �������� (��������� upload_max_filesize � php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', '����������� ������ (��������� memory_limit � php.ini): ');
define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>�������� ���� ������:</span> ");
define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>����</span>");
define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>���</span>");
define('CO_' . $moduleDirNameUpper . '_SERVERPATH', '���� ������� � ����� XOOPS: ');
define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', '��������� ������� ��������: ');
define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>���������� ����� �� PHP ini-�����:</span>");
define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', '�������. ���� �������� *������* ��������� ������ ���� � ������� ����� ����� ��������.');

define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>������</span>");
define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>������� PDF</span>");

define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "���������� �� ������� - �� ������� ������������� ���� '%s'");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "���������� �� ������� - �� ������� �������� ����� ����");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "���������� �� ������� - �� ������� ������������� ������� '%s'");
define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', '�� ������� ������� ������� � ���� ������ : %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', '���� ������ ������� XOOPS %s+ (%s �����������)');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', '��� ����� ������ ��������� ������ PHP %s+ (%s �����������)');
define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', '�� ������� ������� ���� �� ������ �����');

define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', '����� �������� ���� �������');

// Error Msgs
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', '�� ������� ������� ������� %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', '�� ������� ������� %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', '���������� ��������� ������');

//Help
define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(dirname(__DIR__))));
define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', '��������� � ���������� ');
define('CO_' . $moduleDirNameUpper . '_OVERVIEW', '�����');

//define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//help multi-page
define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', '����� �� ���������������');
define('CO_' . $moduleDirNameUpper . '_LICENSE', '��������');
define('CO_' . $moduleDirNameUpper . '_SUPPORT', '���������');
