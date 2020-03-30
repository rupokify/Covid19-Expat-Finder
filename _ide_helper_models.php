<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Expat
 *
 * @property int $id
 * @property int $user_id
 * @property string $full_name
 * @property string|null $mobile_number
 * @property string|null $email
 * @property string $location
 * @property string|null $location_house
 * @property string|null $location_road
 * @property string|null $location_area
 * @property string|null $location_postal_code
 * @property string|null $gender
 * @property int|null $age
 * @property string|null $country
 * @property string|null $date_of_arrival
 * @property int $quarantine_status
 * @property string|null $case_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $reporter
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereCaseStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereDateOfArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereLocationArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereLocationHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereLocationPostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereLocationRoad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereQuarantineStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Expat whereUserId($value)
 */
	class Expat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $password
 * @property string $location
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property int $status
 * @property string $role admin, user, le
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Expat[] $expats
 * @property-read int|null $expats_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

