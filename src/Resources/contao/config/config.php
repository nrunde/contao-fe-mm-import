<?php
//$GLOBALS['TL_CTE']['ulpr']['fe_mm_import'] = '\Ulpr\ContaoFeMmImportBundle\classes\contao\elements\FeMmImport';
$GLOBALS['TL_HOOKS']['processFormData'][] = array('FeMmImport','genFeOutput');
