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

namespace Avalon\Translatons;

use Avalon\Language;

/**
 * The English translations for Avalon.
 * @package Avalon\Language\Translations
 */
$en_AU = new Language(function ($t) {
    $t->name    = "English";
    $t->locale  = "en_AU";
    $t->strings = [
        // ---------------------------------------------------------------------
        // Model validations
        'errors.validations.unique'        => "{field} is already in use",
        'errors.validations.required'      => "{field} is required",
        'errors.validations.email'         => "{field} is not a valid email address",
        'errors.validations.minLength'     => "{field} must be at least {minLength} characters long",
        'errors.validations.maxLength'     => "{field} must be under {maxLength} characters long",
        'errors.validations.integer'       => "{field} must be a number",
        'errors.validations.confirm'       => "{field} doesn't match confirmation",
        'errors.validations.no_whitespace' => "{field} cannot contain spaces",
        'errors.validations.alnum'         => "{field} must be alpha-numeric",

        // ---------------------------------------------------------------------
        // Time helper
        'time.x_second' => "{plural:{0}, {{0} second|{0} seconds}}",
        'time.x_minute' => "{plural:{0}, {{0} minute|{0} minutes}}",
        'time.x_hour'   => "{plural:{0}, {{0} hour|{0} hours}}",
        'time.x_day'    => "{plural:{0}, {{0} day|{0} days}}",
        'time.x_week'   => "{plural:{0}, {{0} week|{0} weeks}}",
        'time.x_month'  => "{plural:{0}, {{0} month|{0} months}}",
        'time.x_year'   => "{plural:{0}, {{0} year|{0} years}}",
        'time.x_and_x'  => "{0} and {1}",
        'time.x_ago'    => "{0} ago",

        // ---------------------------------------------------------------------
        // Forms
        'submit'           => "Submit",
        'save'             => "Save",
        'create'           => "Create",
        'cancel'           => "Cancel",
        'close'            => "Close",
        'edit'             => "Edit",
        'delete'           => "Delete",
        'confirm_password' => "Confirm Password",

        // ---------------------------------------------------------------------
        // Confirmations:
        'confirm.yes'    => "Yes",
        'confirm.no'     => "No",
        'confirm.delete' => "Are you sure?",

        // ---------------------------------------------------------------------
        // Pagination
        'next'     => "Next",
        'previous' => "Previous"
    ];
});
