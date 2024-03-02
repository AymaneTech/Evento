<?php

namespace App\Traits;

trait HasImage
{
    public function create(object $object, $image){
        $imageName = $this->move($image);
        $object->image()->create([
            "path" => $imageName,
            "imageable_type" => get_class($object),
            "imageable_id" => $object->id,
        ]);
    }

    public function move($image)
    {
        $imageName = time() . $image->getClientOriginalName();
        $image->storeAs('public/images', $imageName);
        return $imageName;
    }
}
