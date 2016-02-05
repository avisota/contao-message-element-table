<?php

/**
 * Avisota newsletter and mailing system
 * Copyright © 2016 Sven Baumann
 *
 * PHP version 5
 *
 * @copyright  way.vision 2016
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-message-element-table
 * @license    LGPL-3.0+
 * @filesource
 */

/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['table'] = array(
    'type'      => array('cell', 'type', 'headline'),
    'table'     => array('tableItems'),
    'tconfig'   => array('tableSummary', 'tableHeader', 'tableFooter'),
    'expert'    => array(':hide', 'cssID', 'space'),
    'published' => array('invisible'),
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableItems'] = array(
    'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableItems'],
    'exclude'   => true,
    'inputType' => 'tableWizard',
    'eval'      => array('allowHtml' => true, 'doNotSaveEmpty' => true, 'style' => 'width:142px; height:66px;')
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableSummary'] = array(
    'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableSummary'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array('mandatory' => true, 'maxlength' => 255)
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableHeader'] = array(
    'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableHeader'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['tableFooter'] = array(
    'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['tableFooter'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50')
);
