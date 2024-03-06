<?php

namespace App\Traits;

trait HasImage
{
    public function insert(object $object, array $images)
    {
        foreach ($images as $image) {
            $imageName = $this->move($image);
            $object->images()->create([
                "path" => $imageName,
                "imageable_type" => get_class($object),
                "imageable_id" => $object->id,
            ]);
        }
    }

    public function move($image)
    {
        $imageName = time() . $image->getClientOriginalName();
        $image->storeAs('public/images', $imageName);
        return $imageName;
    }

    public function create(object $object, $image)
    {
        $imageName = $this->move($image);
        $object->image()->create([
            "path" => $imageName,
            "imageable_type" => get_class($object),
            "imageable_id" => $object->id,
        ]);
    }

    public function updateImg(object $object, $image)
    {
        $imageName = $this->move($image);
        $object->image()->update([
            "path" => $imageName,
            "imageable_type" => get_class($object),
            "imageable_id" => $object->id,
        ]);
    }

    public function updateImages(object $object, $images)
    {
        foreach ($images as $image) {
            $imageName = $this->move($image);
            $object->images()->update([
                "path" => $imageName,
                "imageable_type" => get_class($object),
                "imageable_id" => $object->id,
            ]);
        }
    }
}
