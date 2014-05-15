<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-message-element-table
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['table'] = array
(
	'type'      => array('type', 'cell', 'headline'),
	'table'     => array('tableItems'),
	'tconfig'   => array('tableSummary', 'tableHeader', 'tableFooter'),
	'expert'    => array(':hide', 'cssID', 'space'),
	'published' => array('invisible'),
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableItems']   = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableItems'],
	'exclude'   => true,
	'inputType' => 'tableWizard',
	'eval'      => array('allowHtml' => true, 'doNotSaveEmpty' => true, 'style' => 'width:142px; height:66px;')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableSummary'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableSummary'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('mandatory' => true, 'maxlength' => 255)
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableHeader']  = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableHeader'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableFooter']  = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableFooter'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('tl_class' => 'w50')
);
