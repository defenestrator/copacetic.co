<?php

namespace App\Repositories\User;

use Schema;
use App\Repositories\Role\Role;
use App\Repositories\Team\Team;

class UserRepository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * All
     * @return array
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Paginated
     * @return Paginated
     */
    public function paginated()
    {
        return $this->model->paginate(env('PAGINATE', 25));
    }

    /**
     * Find something
     * @param  int $id
     * @return User
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Search User
     *
     * @param string $payload
     *
     * @return User
     */
    public function search($payload, $paginate)
    {
        $query = $this->model->orderBy('created_at', 'desc');
        $query->where('id', 'LIKE', '%'.$payload.'%');

        $columns = Schema::getColumnListing('users');

        foreach ($columns as $attribute) {
            $query->orWhere($attribute, 'LIKE', '%'.$payload.'%');
        };

        return $query->paginate($paginate);
    }

    /**
     * Find by email
     * @param  string $email
     * @return User
     */
    public function findByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }

   /**
     * create a new user
     * @param  array $info
     * @return User
     */
    public function create($info)
    {
        return $this->model->create($info);
    }

    /**
     * Update the user
     *
     * @param  int $userId
     * @param  array $payload
     * @return boolean
     */
    public function update($userId, $payload)
    {
        $user = $this->model->findOrFail($userId);
        $user->fill($payload);
        $user->save();

        return $user;
    }

    /**
     * Assign a role
     *
     * @param  string $roleName
     * @param  int $userId
     * @return boolean
     */
    public function assignRole($roleName, $userId)
    {
        $role = Role::findByName($roleName);
        $user = $this->model->find($userId);

        $user->roles()->attach($role);
    }

    /**
     * Remove a role
     *
     * @param  string $role
     * @param  int $userId
     * @return boolean
     */
    public function unassignRole($roleName, $userId)
    {
        $role = Role::findByName($roleName);
        $user = $this->model->find($userId);

        $user->roles()->detach($role);
    }

    /**
     * Remove all roles
     *
     * @param  int $userId
     * @return boolean
     */
    public function unassignAllRoles($userId)
    {
        $user = $this->model->find($userId);
        $user->roles()->detach();
    }

    /**
     * join a team
     *
     * @param  int $teamId
     * @param  int $userId
     * @return boolean
     */
    public function joinTeam($teamId, $userId)
    {
        $team = Team::find($teamId);
        $user = $this->model->find($userId);

        $user->teams()->attach($team);
    }

    /**
     * Leave a team
     *
     * @param  int $teamId
     * @param  int $userId
     * @return boolean
     */
    public function leaveTeam($teamId, $userId)
    {
        $team = Team::find($teamId);
        $user = $this->model->find($userId);

        $user->teams()->detach($team);
    }

    /**
     * Leave all teams
     *
     * @param  int $userId
     * @return boolean
     */
    public function leaveAllTeams($userId)
    {
        $user = $this->model->find($userId);
        $user->teams()->detach();
    }

    /**
     * Delete someone
     *
     * @param  int $id
     * @return User
     */
    public function destroy($id)
    {
        return $this->model->find($id)->delete();
    }
}
