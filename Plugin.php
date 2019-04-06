<?php namespace Nocio\Outbox;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{

    /**
     * Component details
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'nocio.outbox::lang.plugin.name',
            'description' => 'nocio.outbox::lang.plugin.description',
            'icon'        => 'oc-icon-envelope-o',
            'homepage'    => 'https://github.com/nocio/oc-outbox-plugin'
        ];
    }

    /**
     * Registers mail templates
     * @return array
     */
    public function registerMailTemplates()
    {
        return [
            'nocio.outbox::mail.template' => 'Outbox template'
        ];
    }
}
