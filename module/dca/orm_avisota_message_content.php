<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-message-element-text
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['table'] = array
(
	'type'     => array('type', 'cell', 'headline'),
	'table'    => array('tableitems'),
	'tconfig'  => array('summary', 'thead', 'tfoot'),
	'sortable' => array(':hide', 'sortable'),
	'expert'   => array(':hide', 'cssID', 'space')
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableitems'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableitems'],
	'exclude'   => true,
	'inputType' => 'tableWizard',
	'eval'      => array('allowHtml' => true, 'doNotSaveEmpty' => true, 'style' => 'width:142px; height:66px;')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['summary']    = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['summary'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('mandatory' => true, 'maxlength' => 255)
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['thead']      = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['thead'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tfoot']      = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tfoot'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('tl_class' => 'w50')
);
