<?php

/*
 * This file is part of the littlesqx/aint-queue.
 *
 * (c) littlesqx <littlesqx@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Littlesqx\AintQueue\Driver\Redis;

use Littlesqx\AintQueue\AbstractQueue;

class Queue extends AbstractQueue
{
    /**
     * Push an executable job message into queue.
     *
     * @param $message
     *
     * @return mixed
     */
    public function push($message)
    {
        // TODO: Implement push() method.
    }

    /**
     * Pop an job message from queue.
     *
     * @return mixed
     */
    public function pop()
    {
        // TODO: Implement pop() method.
    }

    /**
     * Remove specific job from current queue.
     *
     * @param $id
     *
     * @return mixed
     */
    public function remove($id)
    {
        // TODO: Implement remove() method.
    }

    /**
     * Get status of specific job.
     *
     * @param $id
     *
     * @return mixed
     */
    public function status($id)
    {
        // TODO: Implement status() method.
    }

    /**
     * CLear current queue,.
     *
     * @return mixed
     */
    public function clear()
    {
        // TODO: Implement clear() method.
    }
}
