<?php

/**
 * This file is part of richardhj/metamodels-fee-widget-avatar.
 *
 * Copyright (c) 2017 Richard Henkenjohann
 *
 * @package   richardhj/metamodels-fee-widget-avatar
 * @author    Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 * @copyright 2017 Richard Henkenjohann
 * @license   https://github.com/richardhj/metamodels-fee-widget-avatar/blob/master/LICENSE LGPL-3.0
 */

namespace Richardhj\MetaModels\Contao\FrontendEditing\EventListener;

use ContaoCommunityAlliance\DcGeneral\Event\GetWidgetClassEvent;


/**
 * Class GetWidgetTypeListener
 *
 * @package Richardhj\MetaModels\Contao\FrontendEditing\EventListener
 */
class GetWidgetTypeListener
{

    /**
     * Set the proper FFL widget class for the file attribute in the MetaModels Frontend Editing.
     *
     * @param GetWidgetClassEvent $event
     */
    public function handleEvent(GetWidgetClassEvent $event)
    {
        if ('FE' !== TL_MODE) {
            return;
        }

        // DUMMY CODE

        $property = $event->getProperty();
        if ('fileTree' === $property->getWidgetType()) {
            $widgetClass = $GLOBALS['TL_FFL']['text'];
            $event->setWidgetClass($widgetClass);
        }
    }
}