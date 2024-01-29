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
 * App\Models\Child
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Chore> $chores
 * @property-read int|null $chores_count
 * @method static \Database\Factories\ChildFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Child newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Child newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Child query()
 * @method static \Illuminate\Database\Eloquent\Builder|Child whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Child whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Child whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Child whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Child whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Child whereUuid($value)
 */
	class Child extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Chore
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property int $chore_category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\ChoreCategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Child> $children
 * @property-read int|null $children_count
 * @method static \Database\Factories\ChoreFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Chore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chore onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Chore query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chore whereChoreCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chore whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chore whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chore whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chore whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chore whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chore withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Chore withoutTrashed()
 */
	class Chore extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChoreCategory
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Chore> $chores
 * @property-read int|null $chores_count
 * @method static \Database\Factories\ChoreCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoreCategory withoutTrashed()
 */
	class ChoreCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $uuid
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Child> $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

