<?php

namespace School;

use School\Group;

interface GroupRepository
{
    /**
     * @param int $id
     * @return \School\Group
     */
    public function find($id);

    public function persist(Group $group);
}
