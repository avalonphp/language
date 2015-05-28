<?php
/*!
 * Avalon
 * Copyright 2011-2015 Jack Polgar
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
$enAU = new Language(function ($t) {
    $t->name    = "English (Australian)";
    $t->locale  = "enAU";
    $t->strings = array(
        // ---------------------------------------------------------------------
        // Model validations
        'errors.validations.already_in_use'    => "{field} is already in use",
        'errors.validations.required'          => "{field} is required",
        'errors.validations.must_be_email'     => "{field} is not a valid email",
        'errors.validations.field_too_short'   => "{field} must be at least {minLength} characters long",
        'errors.validations.field_too_long'    => "{field} must be under {maxLength} characters long",
        'errors.validations.must_be_numeric'   => "{field} must be a number",
        'errors.validations.fields_dont_match' => "{field}'s don't match",

        // ---------------------------------------------------------------------
        // Time helper
        'time.x_second' => "{plural:{1}, {{1} second|{1} seconds}}",
        'time.x_minute' => "{plural:{1}, {{1} minute|{1} minutes}}",
        'time.x_hour'   => "{plural:{1}, {{1} hour|{1} hours}}",
        'time.x_day'    => "{plural:{1}, {{1} day|{1} days}}",
        'time.x_week'   => "{plural:{1}, {{1} week|{1} weeks}}",
        'time.x_month'  => "{plural:{1}, {{1} month|{1} months}}",
        'time.x_year'   => "{plural:{1}, {{1} year|{1} years}}",
        'time.x_and_x'  => "{1} and {2}",
        'time.x_ago'    => "{1} ago",

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
    );
});
