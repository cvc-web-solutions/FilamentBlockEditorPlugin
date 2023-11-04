<?php

namespace CvcWebSolutions\FilamentBlockEditorPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CvcWebSolutions\FilamentBlockEditorPlugin\FilamentBlockEditorPlugin
 */
class FilamentBlockEditorPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CvcWebSolutions\FilamentBlockEditorPlugin\FilamentBlockEditorPlugin::class;
    }
}
