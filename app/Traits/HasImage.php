<?php

namespace App\Traits;

use Illuminate\Support\Str;

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

    public function createImage(object $object, $image)
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

    public function move($image)
    {
        $imageName = "Image_" . time() .Str::random(8) . "." . $image->extension();
        $image->storeAs('public/images', $imageName);
        return $imageName;
    }
}
