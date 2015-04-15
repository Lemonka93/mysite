<?php

/**
 * Created by PhpStorm.
 * User: Lemonka
 * Date: 15.04.2015
 * Time: 19:18
 */
class LanguageHelper
{
    /**
     * Returns all locales
     *
     * @return array
     */
    public static function all()
    {
        return array(
            [
                'locale' => 'en',
                'name' => 'English',
            ],
            [
                'locale' => 'ru',
                'name' => 'Русский',
            ]
        );
    }

    /**
     * Get current locale
     *
     * @return mixed|string
     */
    public static function getCurrent()
    {
        $language = Session::get('_locale');
        if (empty($language)) {
            $language = App::getLocale();
        }
        $languages = self::all();
        foreach ($languages as $value) {
            if ($language == $value['locale']) {
                return $value;
            }
        }
        return [
            'locale' => 'ru',
            'name' => 'Русский',
        ];
    }
}