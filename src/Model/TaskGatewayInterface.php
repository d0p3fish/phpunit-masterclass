<?php

namespace In2it\Masterclass\Model;


interface TaskGatewayInterface
{
    /**
     * Fetch all tasks from the back-end storage
     *
     * @return \Iterator
     */
    public function fetchAll(): \Iterator;

    /**
     * Add a task to the back-end storage
     *
     * @param TaskEntityInterface $taskEntity
     * @return bool
     */
    public function add(TaskEntityInterface $taskEntity): bool;

    /**
     * Find a task by given task ID
     *
     * @param string $taskId
     * @return TaskEntityInterface|null
     */
    public function find(string $taskId): ?TaskEntityInterface;

    /**
     * Removes a task by given task entity
     *
     * @param TaskEntityInterface $taskEntity
     * @return bool
     */
    public function remove(TaskEntityInterface $taskEntity): bool;

    /**
     * Updates a task by given task entity
     *
     * @param TaskEntityInterface $taskEntity
     * @return bool
     */
    public function update(TaskEntityInterface $taskEntity): bool;
}