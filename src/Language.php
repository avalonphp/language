<?php
/*!
 * Avalon
 * Copyright 2011-2016 Jack P.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Avalon;

use InvalidArgumentException;
use Avalon\Language\Translation;

/**
 * Language class.
 *
 * @package Avalon\Language
 * @author  Jack P.
 * @since   2.0.0
 */
class Language
{
    /**
     * Registered languages.
     *
     * @var Translation[]
     */
    protected static $registered = [];

    /**
     * Currently selected language to use, i.e. default.
     *
     * @var string
     */
    protected static $current = 'en_AU';

    /**
     * Sets the specified language as the currently active one.
     *
     * @param string $locale
     */
    public static function setCurrent($locale)
    {
        if (isset(static::$registered[$locale])) {
            static::$current = $locale;
        }
    }

    /**
     * Returns the currently active locale.
     *
     * @return object
     */
    public static function current()
    {
        return static::$registered[static::$current];
    }

    /**
     * Translates the string.
     *
     * @param string $string
     * @param array  $vars
     *
     * @return string
     */
    public static function translate($string, $vars = [])
    {
        if (!is_array($vars)) {
            $args   = func_get_args();
            $string = array_shift($args);
            $vars   = $args;
        }

        return static::current()->translate($string, $vars);
    }

    /**
     * Date localization method.
     *
     * @param string $format
     * @param mixed  $timestamp
     *
     * @return string
     */
    public static function date($format, $timestamp = null)
    {
        return call_user_func(
            [
                static::current(),
                'date',
            ],
            func_get_args()
        );
    }

    /**
     * Get registered languages.
     *
     * @return Translation[]
     */
    public static function getRegistered()
    {
        return static::$registered;
    }

    /**
     * Get a registered translation by locale
     *
     * @param $locale
     *
     * @return Translation|bool
     */
    public static function getTranslation($locale)
    {
        return isset(static::$registered[$locale]) ? static::$registered[$locale] : false;
    }

    /**
     * @param Translation $translation
     *
     * @return bool|null
     */
    public static function registerTranslation(Translation $translation)
    {
        // If the locale is already registered, just add the strings from the new translation
        // to the already existing one.
        if ($registered = static::getTranslation($translation->getLocale())) {
            $registered->addStrings($translation->getStrings());

            return true;
        }

        // Register new translation.
        static::$registered[$translation->getLocale()] = $translation;
    }

    /**
     * Returns an array for used with the `Form::select` helper.
     *
     * @return array
     */
    public static function selectOptions()
    {
        $languages = static::getRegistered();
        $options   = [];

        foreach ($languages as $translation) {
            $options[] = [
                'label' => $translation->getName(),
                'value' => $translation->getLocale(),
            ];
        }

        return $options;
    }
}
