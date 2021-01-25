<?php

namespace App\Repositories;

use App\Models\Device;

class DeviceRepository
{
    /**
     * @var Device
     */
    protected $device;

    /**
     * PostRepository constructor.
     *
     * @param Device $device
     */
    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    /**
     * Get all posts.
     *
     * @return Device $device
     */
    public function getAll()
    {
        return $this->device
            ->get();
    }

    /**
     * Get post by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->device
            ->where('id', $id)
            ->get();
    }

    /**
     * Save Post
     *
     * @param $data
     * @return Device
     */
    public function save($data)
    {
        $post = new $this->device;

        $post->title = $data['title'];
        $post->description = $data['description'];

        $post->save();

        return $post->fresh();
    }

    /**
     * Update Post
     *
     * @param $data
     * @return Device
     */
    public function update($data, $id)
    {
        
        $post = $this->device->find($id);

        $post->title = $data['title'];
        $post->description = $data['description'];

        $post->update();

        return $device;
    }

    /**
     * Update Post
     *
     * @param $data
     * @return Device
     */
    public function delete($id)
    {
        
        $post = $this->device->find($id);
        $post->delete();

        return $device;
    }

}