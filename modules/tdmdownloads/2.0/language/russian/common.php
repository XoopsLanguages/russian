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
define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', '��������� �������� �������: ');
define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>���������� ����� �� PHP ini-�����:</span>");
define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', '�������. ���� �������� *������* ��������� ������ ���� � ������� ����� ����� ��������.');

define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>������</span>");
define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>������� PDF</span>");

define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "���������� �� ������� - �� ������� ������������� ���� '%s'");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "���������� �� ������� - �� ������� �������� ����� ����");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "���������� �� ������� - �� ������� ������������� ������� '%s'");
define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', '�� ������� ������� ������� � ���� ������: %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', '���� ������ ������� XOOPS %s+ (%s ����������)');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', '��� ����� ������ ��������� ������ PHP %s+ (%s ����������)');
define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', '�� ������� ������� ���� �� ������ �����');

define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', '����� �������� ���� �������');

// Error Msgs
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', '�� ������� ������� ������� %s ');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', '�� ������� ������� %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', '���������� ��������� ������');

//Help
define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(dirname(__DIR__))));
define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', '��������� � ��������� ');
define('CO_' . $moduleDirNameUpper . '_OVERVIEW', '�����');

//define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//help multi-page
define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', '����� �� ���������������');
define('CO_' . $moduleDirNameUpper . '_LICENSE', '��������');
define('CO_' . $moduleDirNameUpper . '_SUPPORT', '���������');

//Sample Data
define('CO_' . $moduleDirNameUpper . '_' . 'ADD_SAMPLEDATA', '������������� ������ �������� (������ ��� ������� ������)');
define('CO_' . $moduleDirNameUpper . '_' . 'SAMPLEDATA_SUCCESS', '������ �������� ������� ���������');
define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA', '������� ������ � YAML');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON', '�������� ������ ������?');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC', '���� ��, ������ "�������� ������ ������" ����� ����� ��������������. �� �� ��������� ����������� ��� ������ ���������.');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA', '������� ����� �� � YAML');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_SUCCESS', '������� ����� �� � YAML ������ �������');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_ERROR', '������: �� ������� �������������� ����� �� � YAML');

//letter choice
define('CO_' . $moduleDirNameUpper . '_' . 'BROWSETOTOPIC', "<span style='font-weight: bold;'>�������� ��������� � ���������� �������</span>");
define('CO_' . $moduleDirNameUpper . '_' . 'OTHER', '������');
define('CO_' . $moduleDirNameUpper . '_' . 'ALL', '���');

// block defines
define('CO_' . $moduleDirNameUpper . '_' . 'ACCESSRIGHTS', '����� �������');
define('CO_' . $moduleDirNameUpper . '_' . 'ACTION', '��������');
define('CO_' . $moduleDirNameUpper . '_' . 'ACTIVERIGHTS', '�������� �����');
define('CO_' . $moduleDirNameUpper . '_' . 'BADMIN', '��������� �����');
define('CO_' . $moduleDirNameUpper . '_' . 'BLKDESC', '��������');
define('CO_' . $moduleDirNameUpper . '_' . 'CBCENTER', '����� �������');
define('CO_' . $moduleDirNameUpper . '_' . 'CBLEFT', '����� �����');
define('CO_' . $moduleDirNameUpper . '_' . 'CBRIGHT', '����� ������');
define('CO_' . $moduleDirNameUpper . '_' . 'SBLEFT', '�����');
define('CO_' . $moduleDirNameUpper . '_' . 'SBRIGHT', '������');
define('CO_' . $moduleDirNameUpper . '_' . 'SIDE', '���������');
define('CO_' . $moduleDirNameUpper . '_' . 'TITLE', '��������');
define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLE', '�������');
define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLEIN', '������� �');
define('CO_' . $moduleDirNameUpper . '_' . 'WEIGHT', '���');

define('CO_' . $moduleDirNameUpper . '_' . 'PERMISSIONS', '����� �������');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS', '������������� ������');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_DESC', '������������� ������/�����');

define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_MANAGMENT', '����������');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADDBLOCK', '�������� ����� ����');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_EDITBLOCK', '������������� ����');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_CLONEBLOCK', '����������� ����');

//myblocksadmin
define('CO_' . $moduleDirNameUpper . '_' . 'AGDS', '���������������� ������');
define('CO_' . $moduleDirNameUpper . '_' . 'BCACHETIME', '����� �����������');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADMIN', '������������� ������');

//Template Admin
define('CO_' . $moduleDirNameUpper . '_' . 'TPLSETS', '���������� ���������');
define('CO_' . $moduleDirNameUpper . '_' . 'GENERATE', '������������');
define('CO_' . $moduleDirNameUpper . '_' . 'FILENAME', '��� �����');

//Menu
define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE', '�����������');
define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_YES', '����� "%s" ����������');
define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_NO', '����� "%s" �� ����������. �������� ��������� ����� � CHMOD 777.');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS', '�������� ������ ������������ ����������?');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS_DESC', '���� ��, ������� "��������" � ������ ����������� ���������� ����� ����� ��������������.');

//Latest Version Check
define('CO_' . $moduleDirNameUpper . '_' . 'NEW_VERSION', '����� ������: ');
